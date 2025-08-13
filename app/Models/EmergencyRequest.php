<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmergencyRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'request_type',
        'patient_name',
        'phone_number',
        'patient_age',
        'pickup_address',
        'preferred_hospital',
        'medical_notes',
        'confirmed',
    ];
}
