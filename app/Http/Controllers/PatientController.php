<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PatientRecord;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
    public function createpatients(Request $input){
        $input->validate([
            'patient_name' => ['required', 'string', 'max:255'],
            'patient_condition' => ['string', 'max:100'],
            // 'added_by' => ['required'],
        ]);
    
        $record_created = PatientRecord::create([
            'patient_name' => $input['patient_name'],
            'patient_condition' => $input['patient_condition'],
            // 'added_by' => $input['added_by'],
        ]);
        if (!$record_created) {
            return redirect()->back()->withErrors(['error' => 'an error occurred : record cannot be created']);
        }
    
        return redirect('/dashboard')->withErrors(['status' => 'record created successfully']);
    }
}
