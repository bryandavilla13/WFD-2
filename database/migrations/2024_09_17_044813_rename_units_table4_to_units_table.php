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
        Schema::rename('units_table4', 'units_table');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::rename('units_table', 'units_table4');
    }
};
