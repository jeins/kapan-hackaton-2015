<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProjectPostLike extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_post_like', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('like_count');
            $table->integer('project_posts_id')->unsigned();
            $table->foreign('project_posts_id')->references('id')->on('project_posts')->onDelete('cascade');
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
        Schema::drop('project_post_like');
    }
}
