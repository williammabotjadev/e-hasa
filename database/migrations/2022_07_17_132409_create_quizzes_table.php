<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('curriculum_id')->index(); 
            $table->foreign('curriculum_id')->references('id')->on('curriculums')->onDelete('cascade'); 
            $table->string('name');
            $table->string('description');
            $table->string('created_date');
            $table->string('taken_date')->nullable();
            $table->string('duration');
            $table->string('start_time')->nullable();
            $table->string('end_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quizzes');
    }
};
