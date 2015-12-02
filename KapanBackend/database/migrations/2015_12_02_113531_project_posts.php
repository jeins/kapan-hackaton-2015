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
            $table->string('project_info_or_progress_id'); // i_1 => info with id 1 | p_2 => progress with id 2
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
