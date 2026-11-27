<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\InstagramService;

class InstagramRefreshCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'instagram:refresh {--token= : Optional custom token to test}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Refresh Instagram cache and test connection to Meta Instagram Graph API';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $customToken = $this->option('token');
        $this->info("Checking Meta Instagram Graph API connection...");

        // Clear cache
        InstagramService::clearCache(5);
        $this->info("✓ Local Instagram cache cleared.");

        // Test token
        $result = InstagramService::testToken($customToken);

        if ($result['success']) {
            $this->info("✓ " . $result['message']);
            if (!empty($result['sample'])) {
                $this->line("Sample latest post: " . ($result['sample']['permalink'] ?? 'N/A'));
            }
        } else {
            $this->warn("! " . $result['message']);
            $this->comment("Using beautiful static fallback cards until a valid INSTAGRAM_ACCESS_TOKEN is provided in .env.");
        }

        return 0;
    }
}
