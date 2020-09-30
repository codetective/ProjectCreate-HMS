<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecordsModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_name',
        'patient_condition',
        'added_by',
    ];
}
