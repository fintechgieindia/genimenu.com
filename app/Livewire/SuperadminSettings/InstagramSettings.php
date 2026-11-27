<?php

namespace App\Livewire\SuperadminSettings;

use App\Models\GlobalSetting;
use App\Services\InstagramService;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class InstagramSettings extends Component
{
    use LivewireAlert;

    public $settings;
    public $instagramAccessToken;
    public $instagramUsername;
    public $instagramAccountId;
    public $instagramCacheTime;

    public $testStatus = null;
    public $testMessage = null;
    public $testCount = 0;

    /**
     * Ensure database columns exist on live production without requiring manual migration command.
     */
    public static function ensureColumnsExist(): void
    {
        try {
            if (Schema::hasTable('global_settings')) {
                $missing = [];
                if (!Schema::hasColumn('global_settings', 'instagram_access_token')) {
                    $missing[] = 'token';
                }
                if (!Schema::hasColumn('global_settings', 'instagram_username')) {
                    $missing[] = 'username';
                }
                if (!Schema::hasColumn('global_settings', 'instagram_account_id')) {
                    $missing[] = 'account_id';
                }
                if (!Schema::hasColumn('global_settings', 'instagram_cache_time')) {
                    $missing[] = 'cache';
                }

                if (!empty($missing)) {
                    Schema::table('global_settings', function (Blueprint $table) use ($missing) {
                        if (in_array('token', $missing)) {
                            $table->text('instagram_access_token')->nullable();
                        }
                        if (in_array('username', $missing)) {
                            $table->string('instagram_username', 100)->nullable()->default('genimenu');
                        }
                        if (in_array('account_id', $missing)) {
                            $table->string('instagram_account_id', 100)->nullable()->default('17841456598601647');
                        }
                        if (in_array('cache', $missing)) {
                            $table->integer('instagram_cache_time')->default(7200);
                        }
                    });
                }
            }
        } catch (\Throwable $e) {
            Log::warning('Auto-check for instagram columns on global_settings: ' . $e->getMessage());
        }
    }

    public function mount($settings = null)
    {
        self::ensureColumnsExist();

        $this->settings = $settings ?? GlobalSetting::first();

        $token = null;
        $username = null;
        $accountId = null;
        $cacheTime = null;

        if ($this->settings) {
            if (Schema::hasColumn('global_settings', 'instagram_access_token')) {
                $token = $this->settings->instagram_access_token;
            }
            if (Schema::hasColumn('global_settings', 'instagram_username')) {
                $username = $this->settings->instagram_username;
            }
            if (Schema::hasColumn('global_settings', 'instagram_account_id')) {
                $accountId = $this->settings->instagram_account_id;
            }
            if (Schema::hasColumn('global_settings', 'instagram_cache_time')) {
                $cacheTime = $this->settings->instagram_cache_time;
            }
        }

        $this->instagramAccessToken = $token ?: (cache('custom_instagram_access_token') ?: env('INSTAGRAM_ACCESS_TOKEN', ''));
        $this->instagramUsername    = $username ?: (cache('custom_instagram_username') ?: env('INSTAGRAM_USERNAME', 'genimenu'));
        $this->instagramAccountId   = $accountId ?: (cache('custom_instagram_account_id') ?: env('INSTAGRAM_ACCOUNT_ID', '17841456598601647'));
        $this->instagramCacheTime   = $cacheTime ?: (cache('custom_instagram_cache_time') ?: (int) env('INSTAGRAM_CACHE_TIME', 7200));
    }

    public function submitForm()
    {
        $this->validate([
            'instagramAccessToken' => 'nullable|string',
            'instagramUsername'    => 'nullable|string|max:100',
            'instagramAccountId'   => 'nullable|string|max:100',
            'instagramCacheTime'   => 'required|integer|min:60|max:86400',
        ]);

        self::ensureColumnsExist();

        $token = trim((string) $this->instagramAccessToken);
        $username = ltrim(trim((string) $this->instagramUsername), '@');
        $accountId = trim((string) $this->instagramAccountId);
        $cacheTime = (int) $this->instagramCacheTime;

        // Persist to database safely
        try {
            if ($this->settings) {
                if (Schema::hasColumn('global_settings', 'instagram_access_token')) {
                    $this->settings->instagram_access_token = $token;
                }
                if (Schema::hasColumn('global_settings', 'instagram_username')) {
                    $this->settings->instagram_username = $username;
                }
                if (Schema::hasColumn('global_settings', 'instagram_account_id')) {
                    $this->settings->instagram_account_id = $accountId;
                }
                if (Schema::hasColumn('global_settings', 'instagram_cache_time')) {
                    $this->settings->instagram_cache_time = $cacheTime;
                }
                $this->settings->save();
            }
        } catch (\Throwable $e) {
            Log::error('Instagram settings database save error: ' . $e->getMessage());
        }

        // Persist to cache fallback so it works seamlessly on production even if DB schema update was delayed
        cache()->forever('custom_instagram_access_token', $token);
        cache()->forever('custom_instagram_username', $username);
        cache()->forever('custom_instagram_account_id', $accountId);
        cache()->forever('custom_instagram_cache_time', $cacheTime);

        // Bust Instagram cache & global setting cache
        InstagramService::clearCache(5);
        cache()->forget('global_setting');
        session()->forget('restaurantOrGlobalSetting');

        $this->dispatch('settingsUpdated');

        $this->alert('success', 'Instagram integration settings updated successfully!', [
            'toast'     => true,
            'position'  => 'top-end',
            'timer'     => 3000,
        ]);
    }

    public function testConnection()
    {
        $token = trim($this->instagramAccessToken);

        if (empty($token)) {
            $this->testStatus  = 'error';
            $this->testMessage = 'Please enter an Instagram Access Token to test connection.';
            $this->testCount   = 0;
            return;
        }

        $result = InstagramService::testToken($token);

        if ($result['success']) {
            $this->testStatus  = 'success';
            $this->testMessage = $result['message'];
            $this->testCount   = $result['count'] ?? 0;
            
            $this->alert('success', 'Connection verified! Found ' . $this->testCount . ' media items.', [
                'toast'     => true,
                'position'  => 'top-end',
                'timer'     => 3500,
            ]);
        } else {
            $this->testStatus  = 'error';
            $this->testMessage = $result['message'];
            $this->testCount   = 0;

            $this->alert('error', 'Connection failed: ' . $result['message'], [
                'toast'     => true,
                'position'  => 'top-end',
                'timer'     => 5000,
            ]);
        }
    }

    public function refreshReelsCache()
    {
        InstagramService::clearCache(5);

        $this->alert('info', 'Instagram reels cache cleared! Latest content will be reloaded on next visit.', [
            'toast'     => true,
            'position'  => 'top-end',
            'timer'     => 3000,
        ]);
    }

    public function render()
    {
        return view('livewire.superadmin-settings.instagram-settings');
    }
}
