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
        Schema::create('students', function (Blueprint $table) {
            $table->id('id_students')->autoincrement();
            $table->string('nrp')->unique();
            $table->string('name');
            $table->date('date_of_birth');
            $table->date('place_of_birth');
            $table->text('address')->nullable();
            $table->string('phone_number');
            $table->boolean('is_active')->default(true);
            $table->string('nik')->unique();
            $table->timestamps();
            $table->foreignID('unit')->constrained('units_table')->references('id_units');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
