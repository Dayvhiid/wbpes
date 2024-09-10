<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'password',
        'fullname',
        'matric_no',
        'course',
        'gender',
        'project_supervisor',
        'project_topic',
        'Due Date',
        'chapter_name',
        'submitted',
        'status',
        'file_path'
    ];

    public function student_bio_data(){
        return $this->hasOne(studentBioData::class);
    }
}
