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
            if (!Schema::hasColumn('global_settings', 'instagram_access_token')) {
                $table->text('instagram_access_token')->nullable()->after('instagram_link');
            }
            if (!Schema::hasColumn('global_settings', 'instagram_username')) {
                $table->string('instagram_username', 100)->nullable()->default('genimenu')->after('instagram_access_token');
            }
            if (!Schema::hasColumn('global_settings', 'instagram_cache_time')) {
                $table->integer('instagram_cache_time')->default(7200)->after('instagram_username');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('global_settings', function (Blueprint $table) {
            $columns = [];
            if (Schema::hasColumn('global_settings', 'instagram_access_token')) {
                $columns[] = 'instagram_access_token';
            }
            if (Schema::hasColumn('global_settings', 'instagram_username')) {
                $columns[] = 'instagram_username';
            }
            if (Schema::hasColumn('global_settings', 'instagram_cache_time')) {
                $columns[] = 'instagram_cache_time';
            }
            if (!empty($columns)) {
                $table->dropColumn($columns);
            }
        });
    }
};
