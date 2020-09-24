<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
    protected $fillable = ['id', 'firstname', 'lastname', 'surname']; 
}
