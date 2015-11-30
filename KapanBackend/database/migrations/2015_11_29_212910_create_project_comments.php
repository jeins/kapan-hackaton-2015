<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_info_id')->unsigned();
            $table->foreign('project_info_id')->references('id')->on('project_info')->onDelete('cascade');
            $table->integer('profile_rakyat_id')->unsigned();
            $table->foreign('profile_rakyat_id')->references('id')->on('profile_rakyat')->onDelete('cascade');
            $table->string('comment');
            $table->integer('like_dislike_project'); // like=1 | dislike=-1
            $table->integer('like_comment');
            $table->integer('dislike_comment');
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
        Schema::drop('project_comments');
    }
}
