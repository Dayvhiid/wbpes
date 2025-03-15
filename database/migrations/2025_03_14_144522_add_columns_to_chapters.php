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
            $table->string('backgroundOfStudy')->nullable();
            $table->string('statementOfTheProject')->nullable();
            $table->string('aimsAndObjectives')->nullable();
            $table->string('justificationOfStudy')->nullable();
            $table->string('significanceOfTheProject')->nullable();
            $table->string('organizationOfTheProject')->nullable();
            //CHAPTER TWO
            $table->string('theoriticalFramework')->nullable();
            $table->string('reviewOfRelatedWork')->nullable();
            $table->string('identificationOfResearchGaps')->nullable();
            $table->string('citationAndReferencing')->nullable();
            $table->string('logicalOrganization')->nullable();
            //CHAPTER THREE
            $table->string('researchDesign')->nullable();
            $table->string('dataCollectionMethods')->nullable();
            $table->string('requirements')->nullable();
            $table->string('tools')->nullable();
            $table->string('justificationOfMethodology')->nullable();
            $table->string('ethicalConsoderation')->nullable();
            //CHAPTER FOUR
            $table->string('systemImplementation')->nullable();
            $table->string('uiux')->nullable();
            $table->string('features')->nullable();
            $table->string('testcases')->nullable();
            $table->string('systemDemonstration')->nullable();
            $table->string('researchObjectives')->nullable();
            //CHAPTER FIVE
            $table->string('summaryOfFindings')->nullable();
            $table->string('contributionOfKnowledge')->nullable();
            $table->string('limitationsOfStudy')->nullable();
            $table->string('recommendationOfFutureWork')->nullable();
            $table->string('conclusion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('chapters', function (Blueprint $table) {
            //
        });
    }
};
