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
            $table->string('chapterOneApproval')->nullable();
            $table->string('chapterTwoApproval')->nullable();
            $table->string('chapterThreeApproval')->nullable();
            $table->string('chapterFourApproval')->nullable();
            $table->string('chapterFiveApproval')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('chapters', function (Blueprint $table) {
            $table->dropColumn('chapterOneApproval');
            $table->dropColumn('chapterTwoApproval');
            $table->dropColumn('chapterThreeApproval');
            $table->dropColumn('chapterFourApproval');
            $table-dropColumn('chapterFiveApproval');
        });
    }
};
