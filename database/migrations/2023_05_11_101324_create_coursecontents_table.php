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
        Schema::create('coursecontents', function (Blueprint $table) {
            $table->id();
            $table->string('course_content_title');
            $table->unsignedBigInteger('course_title_id');
            $table->foreign('course_title_id')->references('id')->on('course_infos')->onDelete('cascade');
            $table->string('course_content_link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coursecontents');
    }
};