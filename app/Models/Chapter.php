<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;
    protected $fillable = [
        'matric_no',
        'Due Date',
        'chapter_name',
        'submitted',
        'status',
        'file_path',
        'file_name',
        'fullname',
        'project_supervisor',
        'feedback'
    ];
}
