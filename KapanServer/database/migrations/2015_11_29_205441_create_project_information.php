<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectInformation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_projects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pemerintah')->unsigned();
            $table->foreign('id_pemerintah')->references('id')->on('pemerintah_profiles')->onDelete('cascade');
            $table->string('nama');
            $table->string('jenis'); // pemerintah / daerah
            $table->string('deskripsi');
            $table->string('outcome');
            $table->string('lokasi'); // latitude / longitude => save dalam json
            $table->boolean('status_selesai');
            $table->string('biaya');
            $table->timestamp('waktu_pelaksanaan');
            $table->timestamp('jadwal_realisasi');
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
        Schema::drop('info_projects');
    }
}
