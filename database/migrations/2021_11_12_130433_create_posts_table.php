<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreign('user_id')->references('id')->on('users');

//            $table->dropForeign(['user_id']);
//            $table->foreignId('user_id')->constrained('users');
            $table->string('title');
            $table->text('ingredients');
            $table->text('description');
            $table->text('tags');
            $table->integer('votes');
            $table->string('image');
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
        Schema::dropIfExists('posts');
    }
}
