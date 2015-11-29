<?php

use Illuminate\Database\Seeder;

class InfoProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = [
            [
                'id_pemerintah'     => '1',
                'nama'              => 'Pembangunan Tangga Berjalan',
                'jenis'             => 'negara',
                'deskripsi'         => 'project ini adalah .....',
                'outcome'           => 'project ini adalah .....',
                'lokasi'            => '{long:123, lat:456}',
                'status_selesai'    => 0,
                'biaya'             => '123.123.123.123',
                'waktu_pelaksanaan' => '0000-00-00 00:00:00',
                'jadwal_realisasi'  => '0000-00-00 00:00:00'
            ],
            [
                'id_pemerintah'     => '2',
                'nama'              => 'Pembangunan Kereta Kencana',
                'jenis'             => 'negara',
                'deskripsi'         => 'project ini adalah .....',
                'outcome'           => 'project ini adalah .....',
                'lokasi'            => '{long:123, lat:456}',
                'status_selesai'    => 0,
                'biaya'             => '1238.123.1512',
                'waktu_pelaksanaan' => '0000-00-00 00:00:00',
                'jadwal_realisasi'  => '0000-00-00 00:00:00'
            ]
        ];

        DB::table('info_projects')->insert($projects);
    }
}
