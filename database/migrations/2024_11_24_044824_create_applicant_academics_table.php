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
        Schema::create('applicant_academics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('applicant_id')->constrained('applicants')->onDelete('cascade');
            $table->string('institution');
            $table->string('degree_title');
            $table->string('degree_level');
            $table->year('passed_year');
            $table->date('course_start')->nullable();
            $table->date('course_end')->nullable();
            $table->string('subject');
            $table->string('result_type');
            $table->string('result_store');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicant_academics');
    }
};
