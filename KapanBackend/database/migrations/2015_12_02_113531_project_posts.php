<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProjectPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('profile_rakyat_id')->unsigned();
            $table->foreign('profile_rakyat_id')->references('id')->on('profile_rakyat')->onDelete('cascade');
            $table->integer('project_info_id')->unsigned()->nullable();
            $table->foreign('project_info_id')->references('id')->on('project_info')->onDelete('set null');
            $table->integer('project_progress_id')->unsigned()->nullable();
            $table->foreign('project_progress_id')->references('id')->on('project_progress')->onDelete('set null');
            $table->text('post');
            $table->string('post_image')->nullable();
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
        Schema::drop('project_posts');
    }
}
