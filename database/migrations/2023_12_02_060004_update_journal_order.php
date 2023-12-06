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
        Schema::table('journal_orders', function(Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('personal_cards', function(Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('positions', function(Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('staffing_tables', function(Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('subdivisions', function(Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('type_educations', function(Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('type_orders', function(Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('work_books', function(Blueprint $table) {
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};