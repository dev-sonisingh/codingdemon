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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('question_title');
            $table->string('question_slug')->unique();
            $table->longText('short_description')->nullable();
            $table->longText('question_description')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->tinyInteger('no_index')->default(0);
            $table->string('image')->nullable();
            $table->string('image_title')->nullable();
            $table->string('image_alt_text')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->integer('views')->nullable();
            $table->string('Author')->default('Coding Demon');
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
        Schema::dropIfExists('questions');
    }
};
