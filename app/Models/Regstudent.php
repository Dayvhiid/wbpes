<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Regstudent extends Model
{
    //
    protected $fillable = [
        'name',
        'fullName',
        'matricNo',
        'email',
        'phone_number',
        'department',
        'project_title',
        'gender',
        'user_id',
        'cgpa'      
    ];

    public $timestamps = false;


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
