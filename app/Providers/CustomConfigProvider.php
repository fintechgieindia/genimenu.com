<?php

namespace App\Providers;

use App\Models\Restaurant;
use Illuminate\Mail\MailServiceProvider;
use Illuminate\Queue\QueueServiceProvider;
use Illuminate\Session\SessionServiceProvider;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

/**
 * This class is used to set the SMTP configuration, push notifications, session , driver
 * and translate setting. This is done via provider so as it works during supervisor also.
 * otherwise During supervisor the database configuration in controller do not work
 */
class CustomConfigProvider extends ServiceProvider
{

    const ALL_ENVIRONMENT = ['demo', 'development'];

    public function register()
    {
        try {
            // Fetch all settings in a single query
            $setting = DB::table('email_settings')->first();

            if ($setting) {
                $this->setMailConfig($setting);
            }

            $pushNotificationSetting = DB::table('pusher_settings')->first();

            if ($pushNotificationSetting) {
                $this->setPushNotificationConfig($pushNotificationSetting);
            }
        } catch (\Exception $e) {
            info($e->getMessage());
            // Handle exceptions appropriately, e.g., log the error
        }

        $app = App::getInstance();
        $app->register(MailServiceProvider::class);
        $app->register(QueueServiceProvider::class);
        $app->register(SessionServiceProvider::class);
    }

    public function setMailConfig($setting)
    {
        $globalSetting = DB::table('global_settings')->first();

        if (!in_array(app()->environment(), self::ALL_ENVIRONMENT)) {
            $driver = ($setting->mail_driver != 'mail') ? $setting->mail_driver : 'sendmail';

            // Decrypt the password to be used
            $password = $setting->mail_password;


            Config::set('mail.default', $driver ?: (env('MAIL_MAILER') ?: 'smtp'));
            Config::set('mail.mailers.smtp.host', (!empty($setting->smtp_host)) ? $setting->smtp_host : (env('MAIL_HOST') ?: 'smtp.gmail.com'));
            Config::set('mail.mailers.smtp.port', (!empty($setting->smtp_port)) ? $setting->smtp_port : (env('MAIL_PORT') ?: 465));
            Config::set('mail.mailers.smtp.username', (!empty($setting->mail_username)) ? $setting->mail_username : env('MAIL_USERNAME'));
            Config::set('mail.mailers.smtp.password', (!empty($password)) ? $password : env('MAIL_PASSWORD'));
            Config::set('mail.mailers.smtp.encryption', (!empty($setting->smtp_encryption)) ? $setting->smtp_encryption : (env('MAIL_ENCRYPTION') ?: 'ssl'));

            Config::set('queue.default', ($setting->enable_queue == 'yes' ? 'database' : 'sync'));
        }

        Config::set('mail.from.name', (!empty($setting->mail_from_name)) ? $setting->mail_from_name : (env('MAIL_FROM_NAME') ?: 'Geni Menu'));
        Config::set('mail.from.address', (!empty($setting->mail_from_email)) ? $setting->mail_from_email : (env('MAIL_FROM_ADDRESS') ?: 'genimenuglobal@gmail.com'));

        Config::set('app.name', $globalSetting->name);

        Config::set('app.logo', $globalSetting->logo ? asset_url_local_s3('logo/' . $globalSetting->logo) : asset('img/logo.png'));
        Config::set('session.driver', $globalSetting->session_driver ?? Config::get('session.driver'));
    }

    public function setPushNotificationConfig($setting)
    {
        // Set broadcasting configuration
        if ($setting->pusher_broadcast && $setting->pusher_app_id && $setting->pusher_key && $setting->pusher_secret) {
            Config::set('broadcasting.default', 'pusher');
            Config::set('broadcasting.connections.pusher.key', $setting->pusher_key);
            Config::set('broadcasting.connections.pusher.secret', $setting->pusher_secret);
            Config::set('broadcasting.connections.pusher.app_id', $setting->pusher_app_id);
            Config::set('broadcasting.connections.pusher.options.cluster', $setting->pusher_cluster ?? '');
            Config::set('broadcasting.connections.pusher.options.host', 'api-' . ($setting->pusher_cluster ?? 'mt1') . '.pusher.com');
            Config::set('broadcasting.connections.pusher.options.port', 443);
            Config::set('broadcasting.connections.pusher.options.useTLS', true);
            Config::set('broadcasting.connections.pusher.options.curl_options', [
                CURLOPT_SSL_VERIFYHOST => 0,
                CURLOPT_SSL_VERIFYPEER => 0,
                CURLOPT_TIMEOUT => 30,
            ]);
        } else {
            Config::set('broadcasting.default', 'null');
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Ensure broadcasting config is set during boot
        try {
            $pushNotificationSetting = DB::table('pusher_settings')->first();
            if ($pushNotificationSetting) {
                $this->setPushNotificationConfig($pushNotificationSetting);
            }
        } catch (\Exception $e) {
            info('Error setting broadcasting config in boot: ' . $e->getMessage());
        }
    }
}
