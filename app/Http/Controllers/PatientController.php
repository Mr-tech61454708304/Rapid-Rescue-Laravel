<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PatientController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:patients',
            'phone_number' => 'required|string|max:20',
            'date_of_birth' => 'required|date',
            'password' => 'required|string|min:6|confirmed',
        ]);

        DB::table('patients')->insert([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'date_of_birth' => $request->date_of_birth,
            'password' => Hash::make($request->password),
            'account_type' => $request->account_type ?? 'patient',
            'blood_type' => $request->blood_type ?? 'unknown',
            'primary_physician' => $request->primary_physician,
            'known_allergies' => $request->known_allergies,
            'current_medications' => $request->current_medications,
            'medical_consent' => $request->has('medical_consent'),
            'terms_accepted' => $request->has('terms_accepted'),
            'communications_accepted' => $request->has('communications_accepted'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return back()->with('success', 'Account created successfully!');
    }
}
