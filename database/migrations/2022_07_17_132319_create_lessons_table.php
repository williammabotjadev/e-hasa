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
        Schema::create('lessons', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('curriculum_id')->index(); 
            $table->foreign('curriculum_id')->references('id')->on('curriculums')->onDelete('cascade'); 
            $table->string('name');
            $table->string('description');
            $table->string('author');
            $table->string('created_at');
            $table->string('duration');
            $table->string('tags');
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
        Schema::dropIfExists('lessons');
    }
};
