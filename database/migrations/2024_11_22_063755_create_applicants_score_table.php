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
        Schema::create('applicants_score', function (Blueprint $table) {
            $table->id();
            $table->foreignId('applicant_id')->constrained('applicants')->onDelete('cascade');
            $table->string('test_title', 100);
            $table->decimal('overall_score', 5, 2);
            $table->decimal('listening', 5, 2)->nullable();
            $table->decimal('reading', 5, 2)->nullable();
            $table->decimal('writing', 5, 2)->nullable();
            $table->decimal('speaking', 5, 2)->nullable();
            $table->date('attended_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicants_score');
    }
};
