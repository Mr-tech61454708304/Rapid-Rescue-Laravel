<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmergencyRequest;

class EmergencyRequestController extends Controller
{
    /**
     * Store a new emergency request
     */
    public function store(Request $request)
    {
        // Validate form data
        $validated = $request->validate([
            'request_type' => 'required|in:emergency,non_emergency',
            'patient_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'patient_age' => 'nullable|integer|min:0|max:120',
            'pickup_address' => 'required|string',
            'preferred_hospital' => 'nullable|string|max:255',
            'medical_notes' => 'nullable|string',
            'confirmed' => 'required|boolean',
        ]);

        // Insert data into DB
        EmergencyRequest::create($validated);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Emergency request submitted successfully!');
    }

  public function requestdisplay()
    {
        // Fetch all requests ordered by latest first
        $requests = EmergencyRequest::orderBy('created_at', 'desc')->get();

        // Return a view and pass the requests
        return view('driver-request', compact('requests'));
    }

}
