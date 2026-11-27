<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (Schema::hasTable('email_settings')) {
            Schema::table('email_settings', function (Blueprint $table) {
                if (!Schema::hasColumn('email_settings', 'partner_notification_email')) {
                    $table->string('partner_notification_email', 255)->nullable()->default('priyamayil04@gmail.com')->after('mail_from_email');
                }
            });
        }

        if (Schema::hasTable('global_settings')) {
            Schema::table('global_settings', function (Blueprint $table) {
                if (!Schema::hasColumn('global_settings', 'partner_notification_email')) {
                    $table->string('partner_notification_email', 255)->nullable()->default('priyamayil04@gmail.com')->after('email');
                }
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('email_settings')) {
            Schema::table('email_settings', function (Blueprint $table) {
                if (Schema::hasColumn('email_settings', 'partner_notification_email')) {
                    $table->dropColumn('partner_notification_email');
                }
            });
        }

        if (Schema::hasTable('global_settings')) {
            Schema::table('global_settings', function (Blueprint $table) {
                if (Schema::hasColumn('global_settings', 'partner_notification_email')) {
                    $table->dropColumn('partner_notification_email');
                }
            });
        }
    }
};
