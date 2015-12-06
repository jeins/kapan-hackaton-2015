<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProjectInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_info', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('profile_pemerintah_id')->unsigned();
            $table->foreign('profile_pemerintah_id')->references('id')->on('profile_pemerintah')->onDelete('cascade');
            $table->string('nama');
            $table->enum('jenis', array('negara', 'daerah'));
            $table->text('deskripsi');
            $table->text('outcome');
            $table->string('lokasi'); // latitude / longitude => save dalam json
            $table->boolean('status_project');
            $table->string('biaya');
            $table->timestamp('waktu_pelaksanaan');
            $table->timestamp('jadwal_realisasi');
            $table->string('images')->nullable();
            $table->string('videos')->nullable();
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
        Schema::drop('project_info');
    }
}
