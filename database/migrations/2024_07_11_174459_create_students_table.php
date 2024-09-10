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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('password');
            $table->string('matric_no');
            $table->string('course')->nullable();
            $table->string('gender')->nullable();
            $table->string('project_supervisor')->nullable();
            $table->string('project_topic')->nullable();
            $table->string('fullname')->nullable();
            $table->string('due_date')->nullable();
            $table->string('chapter_name')->nullable();
            $table->string('submitted')->nullable();
            $table->string('status')->nullable();
            $table->string('file_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
