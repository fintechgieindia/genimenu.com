<?php

namespace App\Notifications;

use App\Models\Restaurant;
use Illuminate\Notifications\Messages\MailMessage;

class NewRestaurantSignup extends BaseNotification
{

    public $forRestaurant;

    /**
     * Create a new notification instance.
     */
    public function __construct(Restaurant $restaurant)
    {
        // this is done so as url and log do not changes to restaurant
        $this->forRestaurant = $restaurant;
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
        $siteName = global_setting()->name ?? 'Geni Menu';
        $recipientName = !empty($notifiable->name) ? $notifiable->name : 'Admin';

        $owner = $this->forRestaurant->users?->first() ?? $this->forRestaurant->user;
        $branch = $this->forRestaurant->branches?->first();
        $countryName = $this->forRestaurant->country?->countries_name ?? 'India';
        $adminDashboardUrl = route('superadmin.restaurants.index');

        $data = [
            'siteName' => $siteName,
            'recipientName' => $recipientName,
            'restaurant' => $this->forRestaurant,
            'restaurantName' => $this->forRestaurant->name,
            'branchName' => $branch?->name ?? 'Main Branch',
            'ownerName' => $owner?->name ?? $this->forRestaurant->name,
            'ownerEmail' => $owner?->email ?? $this->forRestaurant->email,
            'ownerPhone' => ($this->forRestaurant->phone_code ? '+' . ltrim($this->forRestaurant->phone_code, '+') . ' ' : '') . $this->forRestaurant->phone_number,
            'address' => $this->forRestaurant->address ?? 'N/A',
            'country' => $countryName,
            'registeredAt' => $this->forRestaurant->created_at ? $this->forRestaurant->created_at->format('d M Y, h:i A') : now()->format('d M Y, h:i A'),
            'adminDashboardUrl' => $adminDashboardUrl,
        ];

        return $build
            ->subject(__('email.newRestaurantSignup.subject', ['site_name' => $siteName]))
            ->view('emails.admin-new-restaurant', $data);
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
