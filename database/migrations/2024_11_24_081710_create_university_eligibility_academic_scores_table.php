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
        Schema::create('university_eligibility_academic_scores', function (Blueprint $table) {
            $table->id();
            $table->string('level');
            $table->string('overall_type');
            $table->float('overall_score');
            $table->string('academic_score_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('university_eligibility_academic_scores');
    }
};
