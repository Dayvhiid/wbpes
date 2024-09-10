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
        Schema::create('student_bio_data', function (Blueprint $table) {
            $table->id();
            $table->string('matric_no');
            $table->string('course');
            $table->string('gender')->nullable();
            $table->string('project_supervisor');
            $table->string('project_topic');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_bio_data');
    }
};
