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
        // Schema::create('student_groups', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('group_name');
        //     $table->timestamps();
        // });
        
        Schema::create('group_students', function (Blueprint $table) {
            $table->id();
            $table->string('matric_no');
            $table->string('group_name');
            $table->string('supervisor');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('group_students');
    }
   
};
