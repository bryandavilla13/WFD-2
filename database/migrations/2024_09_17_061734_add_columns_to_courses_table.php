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
        Schema::table('courses', function (Blueprint $table) {
            // Adding new columns after 'course_code'
            $table->year('curriculum_year')->after('course_code');
            $table->string('course_name')->after('curriculum_year');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            // Dropping the columns in reverse order of addition
            $table->dropColumn('course_name');
            $table->dropColumn('curriculum_year');
        });
    }
};
