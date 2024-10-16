<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentData extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'matric_no',
        'department',
        'cgpa',
        'phone_number'
    ];
}
