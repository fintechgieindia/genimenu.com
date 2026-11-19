<?php

namespace App\Notifications;

use App\Models\Restaurant;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class WelcomeRestaurantEmail extends BaseNotification
{

    public $restaurantDetails;
    public $password;

    /**
     * Create a new notification instance.
     */
    public function __construct(Restaurant $restaurantDetails, $password)
    {
        $this->restaurantDetails = $restaurantDetails;
        $this->password = $password;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $build = parent::build($notifiable);

        if (module_enabled('Subdomain')) {
            $loginUrl = 'https://' . $this->restaurantDetails->sub_domain;
        } else {
            $loginUrl = url('/login');
        }

        $siteName = global_setting()->name ?? 'Geni Menu';
        $branchName = $notifiable->branch?->name 
            ?? $this->restaurantDetails->branches?->first()?->name 
            ?? 'Main Branch';

        $data = [
            'siteName' => $siteName,
            'restaurant' => $this->restaurantDetails,
            'restaurantName' => $this->restaurantDetails->name,
            'userName' => !empty($notifiable->name) ? $notifiable->name : 'Restaurant Partner',
            'userEmail' => $notifiable->email,
            'password' => $this->password,
            'branchName' => $branchName,
            'loginUrl' => $loginUrl,
        ];

        return $build
            ->subject(__('email.welcomeRestaurant.subject', ['site_name' => $siteName]))
            ->view('emails.welcome-restaurant', $data);
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
