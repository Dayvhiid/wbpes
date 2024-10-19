<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('chapters', function (Blueprint $table) {
            //
            $table->string('title_evaluation');
            $table->string('methodology_evaluation');
            $table->string('literature_review_evaluation');
            $table->string('research_question_evaluation');
            $table->string('data_collection_evaluation');
            $table->string('data_analysis_evaluation');
            $table->string('conclusion_evaluation');
            $table->string('presentation_quality_evaluation');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('chapter', function (Blueprint $table) {
            //
        });
    }
};
