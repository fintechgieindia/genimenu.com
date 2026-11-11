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
        Schema::table('popup_leads', function (Blueprint $table) {
            if (!Schema::hasColumn('popup_leads', 'country')) {
                $table->string('country')->nullable()->after('city');
            }
            if (!Schema::hasColumn('popup_leads', 'business_name')) {
                $table->string('business_name')->nullable()->after('restaurant_name');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('popup_leads', function (Blueprint $table) {
            if (Schema::hasColumn('popup_leads', 'country')) {
                $table->dropColumn('country');
            }
            if (Schema::hasColumn('popup_leads', 'business_name')) {
                $table->dropColumn('business_name');
            }
        });
    }
};
