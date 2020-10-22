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
            $table->string('slug', 191)->unique();
            $table->string('title', 191);
            $table->string('excerpt')->nullable();
            $table->text('body');
            $table->boolean('published')->default(false);
            $table->dateTime('published_date')->default('2020-10-23 00:00:00');
            $table->string('featured_image')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreignId('user_id');
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
