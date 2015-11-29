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
            $table->integer('id_project')->unsigned();
            $table->foreign('id_project')->references('id')->on('info_projects')->onDelete('cascade');
            $table->integer('id_rakyat')->unsigned();
            $table->foreign('id_rakyat')->references('id')->on('rakyat_profiles')->onDelete('cascade');
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
