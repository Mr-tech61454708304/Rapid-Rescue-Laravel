<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

 
 public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            
            // Personal Information
            $table->string('full_name'); // Full Name
            $table->string('email')->unique(); // Email Address
            $table->string('phone_number'); // Phone Number
            $table->date('date_of_birth'); // Date of Birth
            
            // Account Security
            $table->string('password'); // Password
            
            // Account Type
            $table->enum('account_type', ['patient', 'professional'])->default('patient');
            
            // Medical Information
            $table->enum('blood_type', [
                'A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-', 'unknown'
            ])->default('unknown'); // Blood Type
            
            $table->string('primary_physician')->nullable(); // Primary Physician
            $table->text('known_allergies')->nullable(); // Known Allergies
            $table->text('current_medications')->nullable(); // Current Medications
            
            // Consent and Agreements
            $table->boolean('medical_consent')->default(false); // Medical Consent
            $table->boolean('terms_accepted')->default(false); // Terms of Service
            $table->boolean('communications_accepted')->default(false); // Communications Agreement
            
            // Timestamps
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};


