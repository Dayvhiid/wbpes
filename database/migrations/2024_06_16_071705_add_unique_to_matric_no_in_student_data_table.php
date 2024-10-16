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
        Schema::table('student_data', function (Blueprint $table) {
            // Add unique constraint to matric_no
            $table->string('matric_no')->unique()->change();
        });
    }

    public function down()
    {
        Schema::table('student_data', function (Blueprint $table) {
            // Remove unique constraint in case of rollback
            $table->dropUnique(['matric_no']);
        });
    }
};
