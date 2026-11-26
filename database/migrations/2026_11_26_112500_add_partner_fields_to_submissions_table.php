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
        Schema::table('submissions', function (Blueprint $table) {
            if (!Schema::hasColumn('submissions', 'preferred_model')) {
                $table->string('preferred_model')->nullable()->after('subject');
            }
            if (!Schema::hasColumn('submissions', 'customer_base')) {
                $table->string('customer_base')->nullable()->after('preferred_model');
            }
            if (!Schema::hasColumn('submissions', 'years_in_business')) {
                $table->string('years_in_business')->nullable()->after('customer_base');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('submissions', function (Blueprint $table) {
            if (Schema::hasColumn('submissions', 'preferred_model')) {
                $table->dropColumn('preferred_model');
            }
            if (Schema::hasColumn('submissions', 'customer_base')) {
                $table->dropColumn('customer_base');
            }
            if (Schema::hasColumn('submissions', 'years_in_business')) {
                $table->dropColumn('years_in_business');
            }
        });
    }
};
