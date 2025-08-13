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
        Schema::create('emergency_requests', function (Blueprint $table) {
            $table->id();
            $table->enum('request_type', ['emergency', 'non_emergency']); // Request Type
            $table->string('patient_name');
            $table->string('phone_number');
            $table->integer('patient_age')->nullable();
            $table->text('pickup_address');
            $table->string('preferred_hospital')->nullable();
            $table->text('medical_notes')->nullable();
            $table->boolean('confirmed')->default(false); // Checkbox confirm
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emergency_requests');
    }
};
