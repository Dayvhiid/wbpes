<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentBioData extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullname',
        'matric_no',
        'course',
        'project_supervisor',
        'project_topic'
    ];
    public function student(){
        return $this->belongsTo(Student::class);
    }
}
