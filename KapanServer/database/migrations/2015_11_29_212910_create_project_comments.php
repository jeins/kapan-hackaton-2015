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
            $table->integer('info_project_id')->unsigned();
            $table->foreign('info_project_id')->references('id')->on('info_projects')->onDelete('cascade');
            $table->integer('rakyat_profile_id')->unsigned();
            $table->foreign('rakyat_profile_id')->references('id')->on('rakyat_profiles')->onDelete('cascade');
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
