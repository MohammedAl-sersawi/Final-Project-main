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
        Schema::create('conversations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained('patients')->nullOnDelete();
            $table->foreignId('doctor_id')->constrained('doctors')->nullOnDelete();
            $table->foreignId('last_message_id')->nullable()->constrained('messages')->nullOnDelete();
            $table->unique(['patient_id', 'doctor_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conversations');
    }
};
