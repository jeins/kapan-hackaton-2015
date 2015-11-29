<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateProgressProject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_progress', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('info_project_id')->unsigned();
            $table->foreign('info_project_id')->references('id')->on('info_projects')->onDelete('cascade');
            $table->string('description');
            $table->timestamp('tanggal_update');
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
        Schema::drop('project_progress');
    }
}
