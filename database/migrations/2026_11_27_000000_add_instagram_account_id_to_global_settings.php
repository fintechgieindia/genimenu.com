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
        Schema::table('global_settings', function (Blueprint $table) {
            if (!Schema::hasColumn('global_settings', 'instagram_account_id')) {
                $table->string('instagram_account_id', 100)->nullable()->default('17841456598601647')->after('instagram_username');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('global_settings', function (Blueprint $table) {
            if (Schema::hasColumn('global_settings', 'instagram_account_id')) {
                $table->dropColumn('instagram_account_id');
            }
        });
    }
};
