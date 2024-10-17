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
        Schema::table('group_students', function (Blueprint $table) {
            $table->string('supervisor')->nullable(); // Add your column here
        });
    }

    public function down()
    {
        Schema::table('group_students', function (Blueprint $table) {
            $table->dropColumn('supervisor'); // Remove the column in case of rollback
        });
    }
};