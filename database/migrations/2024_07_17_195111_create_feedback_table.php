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
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->enum('title_evaluation', ['meets', 'does_not_meet']);
            $table->enum('methodology_evaluation', ['meets', 'does_not_meet']);
            $table->enum('literature_review_evaluation', ['meets', 'does_not_meet']);
            $table->enum('research_question_evaluation', ['meets', 'does_not_meet']);
            $table->enum('data_collection_evaluation', ['meets', 'does_not_meet']);
            $table->enum('data_analysis_evaluation', ['meets', 'does_not_meet']);
            $table->enum('conclusion_evaluation', ['meets', 'does_not_meet']);
            $table->enum('presentation_quality_evaluation', ['meets', 'does_not_meet']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedback');
    }
};
