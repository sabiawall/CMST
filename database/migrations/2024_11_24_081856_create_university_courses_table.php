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
        Schema::create('university_courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('university_id')->constrained('universities')->onDelete('cascade');
            $table->string('course_name');
            $table->string('course_level');
            $table->float('fee_per_year', 10, 2);
            $table->string('course_period');
            $table->float('semester_fee', 10, 2)->nullable();
            $table->string('course_link', 255)->nullable();
            $table->string('course_code', 50)->unique();
            $table->string('document')->nullable();
            $table->text('criteria')->nullable();
            $table->float('scholarship', 10, 2)->nullable();
            $table->float('application_fee', 10, 2)->nullable();
            $table->float('annual_cost_of_living', 10, 2)->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('university_courses');
    }
};
