<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_id',
        'supervisor_id',
        'title_evaluation',
        'methodology_evaluation',
        'literature_review_evaluation',
        'research_question_evaluation',
        'data_collection_evaluation',
        'data_analysis_evaluation',
        'conclusion_evaluation',
        'presentation_quality_evaluation',
        'comments'
    ];

}
