<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.sr
     */
    public function up(): void
    {
        Schema::create('regstudents', function (Blueprint $table) {
           $table->string('name')->nullable();
           $table->string('fullName')->nullable();
           $table->string('matricNo')->nullable();
           $table->string('email')->nullable();
           $table->string('phone_number')->nullable();
           $table->string('department')->nullable();
           $table->string('project_title')->nullable();
           $table->string('gender')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regstudents');
    }
};
