<?php

use Illuminate\Database\Seeder;

class ProjectProgressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $progress = [
            [
                'project_info_id'	=> 1,
                'angka_progress' => 50,
                'description' => 'asdas asdas asdasd ',
                'tanggal_update' => '0000-00-00 00:00:00'
            ],
            [
                'project_info_id'	=> 2,
                'angka_progress' => 25,
                'description' => 'asdas asdas asdasd ',
                'tanggal_update' => '0000-00-00 00:00:00'
            ],
            [
                'project_info_id'	=> 3,
                'angka_progress' => 75,
                'description' => 'asdas asdas asdasd ',
                'tanggal_update' => '0000-00-00 00:00:00'
            ],
            [
                'project_info_id'	=> 4,
                'angka_progress' => 0,
                'description' => 'asdas asdas asdasd ',
                'tanggal_update' => '0000-00-00 00:00:00'
            ],
            [
                'project_info_id'	=> 5,
                'angka_progress' => 25,
                'description' => 'asdas asdas asdasd ',
                'tanggal_update' => '0000-00-00 00:00:00'
            ],
            [
                'project_info_id'	=> 6,
                'angka_progress' => 55,
                'description' => 'asdas asdas asdasd ',
                'tanggal_update' => '0000-00-00 00:00:00'
            ],
            [
                'project_info_id'	=> 7,
                'angka_progress' => 35,
                'description' => 'asdas asdas asdasd ',
                'tanggal_update' => '0000-00-00 00:00:00'
            ],
            [
                'project_info_id'	=> 8,
                'angka_progress' => 75,
                'description' => 'asdas asdas asdasd ',
                'tanggal_update' => '0000-00-00 00:00:00'
            ],
            [
                'project_info_id'	=> 9,
                'angka_progress' => 25,
                'description' => 'asdas asdas asdasd ',
                'tanggal_update' => '0000-00-00 00:00:00'
            ],
            [
                'project_info_id'	=> 10,
                'angka_progress' => 15,
                'description' => 'asdas asdas asdasd ',
                'tanggal_update' => '0000-00-00 00:00:00'
            ]
        ];

        DB::table('project_progress')->insert($progress);
    }
}
