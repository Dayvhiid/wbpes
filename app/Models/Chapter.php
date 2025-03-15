<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'matric_no',
        'Due Date',
        'chapter_name',
        'submitted',
        'status',
        'file_path',
        'file_name',
        'fullname',
        'project_supervisor',
        'feedback',
        'title_evaluation',
        'methodology_evaluation',
        'literature_review_evaluation',
        'research_question_evaluation',
        'data_collection_evaluation',
        'data_analysis_evaluation',
        'conclusion_evaluation',
        'presentation_quality_evaluation',
        'comments',
        'validated_status',
        'backgroundOfStudy',
        'statementOfTheProject',
        'aimsAndObjectives',
        'justificationOfStudy',
        'significanceOfTheProject',
        'organizationOfTheProject',
        'theoriticalFramework',
        'reviewOfRelatedWork',
        'identificationOfResearchGaps',
        'citationAndReferencing',
        'logicalOrganization',
        'researchDesign',
        'dataCollectionMethods',
        'requirements',
        'tools',
        'justificationOfMethodology',
        'ethicalConsoderation',
        'systemImplementation',
        'uiux',
        'features',
        'testcases',
        'systemDemonstration',
        'researchObjectives',
        'summaryOfFindings',
        'contributionOfKnowledge',
        'limitationsOfStudy',
        'recommendationOfFutureWork',
        'conclusion',
    ];
}
