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
        Schema::create('university_course_intake_months', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained('university_courses')->onDelete('cascade');
            $table->string('month', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('university_course_intake_months');
    }
};
