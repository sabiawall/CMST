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
        Schema::create('university_eligibility_test_scores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('university_id')->constrained('universities')->onDelete('cascade');
            $table->string('test');
            $table->string('overall_type');
            $table->float('overall_score');
            $table->float('listening')->nullable();
            $table->float('writing')->nullable();
            $table->float('reading')->nullable();
            $table->float('speaking')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('university_eligibility_test_scores');
    }
};
