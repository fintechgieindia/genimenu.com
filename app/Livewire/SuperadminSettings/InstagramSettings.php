<?php

namespace App\Livewire\SuperadminSettings;

use App\Models\GlobalSetting;
use App\Services\InstagramService;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class InstagramSettings extends Component
{
    use LivewireAlert;

    public $settings;
    public $instagramAccessToken;
    public $instagramUsername;
    public $instagramCacheTime;

    public $testStatus = null;
    public $testMessage = null;
    public $testCount = 0;

    public function mount($settings = null)
    {
        $this->settings = $settings ?? GlobalSetting::first();

        $this->instagramAccessToken = $this->settings->instagram_access_token ?? env('INSTAGRAM_ACCESS_TOKEN', '');
        $this->instagramUsername    = $this->settings->instagram_username ?? env('INSTAGRAM_USERNAME', 'genimenu');
        $this->instagramCacheTime   = $this->settings->instagram_cache_time ?? (int) env('INSTAGRAM_CACHE_TIME', 7200);
    }

    public function submitForm()
    {
        $this->validate([
            'instagramAccessToken' => 'nullable|string',
            'instagramUsername'    => 'nullable|string|max:100',
            'instagramCacheTime'   => 'required|integer|min:60|max:86400',
        ]);

        $this->settings->instagram_access_token = trim($this->instagramAccessToken);
        $this->settings->instagram_username     = ltrim(trim($this->instagramUsername), '@');
        $this->settings->instagram_cache_time   = (int) $this->instagramCacheTime;
        $this->settings->save();

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
