<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientRecord extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_name',
        'patient_condition',
        
    ];
}
