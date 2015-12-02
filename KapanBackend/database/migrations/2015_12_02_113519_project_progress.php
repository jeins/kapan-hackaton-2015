<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProjectProgress extends Migration
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
            $table->integer('project_info_id')->unsigned();
            $table->foreign('project_info_id')->references('id')->on('project_info')->onDelete('cascade');
            $table->text('description');
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
