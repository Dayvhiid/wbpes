<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('group_students', function (Blueprint $table) {
            $table->id();
            $table->string('matric_no'); // Link to the student
            $table->string('group_name'); // Group name or identifier
            $table->foreign('matric_no')->references('matric_no')->on('student_data')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('group_students');
    }
};
