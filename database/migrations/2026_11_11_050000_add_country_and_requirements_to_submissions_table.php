<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('submissions', function (Blueprint $table) {
            if (!Schema::hasColumn('submissions', 'country')) {
                $table->string('country', 100)->nullable()->after('address');
            }
            if (!Schema::hasColumn('submissions', 'requirements')) {
                $table->text('requirements')->nullable()->after('designation');
            }
        });

        // Backfill country from address where country is null
        DB::table('submissions')
            ->whereNull('country')
            ->whereNotNull('address')
            ->update(['country' => DB::raw('address')]);

        // Backfill requirements from message if contains 'Interested In:'
        $rows = DB::table('submissions')
            ->whereNull('requirements')
            ->where('message', 'like', '%Interested In:%')
            ->get();

        foreach ($rows as $row) {
            if (preg_match('/Interested In:\s*([^\n\r]+)/', $row->message, $matches)) {
                $reqStr = trim($matches[1]);
                DB::table('submissions')
                    ->where('id', $row->id)
                    ->update(['requirements' => $reqStr]);
            }
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('submissions', function (Blueprint $table) {
            if (Schema::hasColumn('submissions', 'country')) {
                $table->dropColumn('country');
            }
            if (Schema::hasColumn('submissions', 'requirements')) {
                $table->dropColumn('requirements');
            }
        });
    }
};

