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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();           
            $table->foreignId('applicant_id')->constrained('applicants')->onDelete('cascade');
            $table->string('applicant_code');
            $table->text('description');
            $table->date('date');
            $table->float('grand_total');
            $table->float('discount');
            $table->float('paid');
            $table->float('remaining_payment');
            $table->string('payment_method');
            $table->string('status');
            $table->foreignId('created_by')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
