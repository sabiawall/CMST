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
        Schema::create('universities', function (Blueprint $table) {
            $table->id();     
            $table->foreignId('country_id')->constrained('countries')->onDelete('cascade');
            $table->string('university_name');
            $table->string('university_email')->unique();
            $table->string('university_logo')->nullable();
            $table->string('state');
            $table->string('city');
            $table->string('location');
            $table->string('university_link')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('universities');
    }
};
