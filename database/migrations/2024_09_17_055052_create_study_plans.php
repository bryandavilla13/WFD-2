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
        Schema::create('study_plans', function (Blueprint $table) {
            $table->id('study_plans_id')->autoincrement();
            $table->foreignID('student_id')->constrained('students')->references('id_students');
            $table->foreignID('course_id')->constrained('courses')->references('courses_id');
            $table->string('period', 6);
            $table->boolean('is_cancel')->default(false);
            $table->float('grade')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('study_plans');
    }
};
