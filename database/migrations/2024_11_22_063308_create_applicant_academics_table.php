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
            $table->string('institution', 150);
            $table->string('degree_title', 100);
            $table->string('degree_level', 50);
            $table->year('passed_year');
            $table->date('course_start')->nullable();
            $table->date('course_end')->nullable();
            $table->string('subject', 100);
            $table->string('result_type', 50);
            $table->string('result_store', 50);
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
