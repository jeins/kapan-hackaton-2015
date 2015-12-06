<?php

use Illuminate\Database\Seeder;

class ProjectPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
        	[
        		'profile_rakyat_id'	=> 1,
        		'project_info_id'	=> 1,
        		'post'				=> 'ini project apaan sih? Apa maksudnya Tangga Berjalan???'
        	],
        	[
        		'profile_rakyat_id'	=> 2,
        		'project_info_id'	=> 1,
        		'post'				=> 'semoga kedepan pemerintah bisa lebih peduli dengan rakyat miskin!'
        	],
        	[
        		'profile_rakyat_id'	=> 2,
        		'project_info_id'	=> 2,
        		'post'				=> 'Project yang sangat bagus, mari kita pantauu...'
        	],
          [
        		'profile_rakyat_id'	=> 3,
        		'project_info_id'	=> 3,
        		'post'				=> 'Semoga terealisasi'
        	],
          [
        		'profile_rakyat_id'	=> 10,
        		'project_info_id'	=> 4,
        		'post'				=> 'Mohon kelanjutannya diupdate'
        	],
          [
        		'profile_rakyat_id'	=> 9,
        		'project_info_id'	=> 5,
        		'post'				=> 'Proyek yang ditunggu-tunggu. Siap memantau.'
        	],
          [
        		'profile_rakyat_id'	=> 9,
        		'project_info_id'	=> 6,
        		'post'				=> 'Kok saya pesimis ya dengen proyek ini.'
        	],
          [
        		'profile_rakyat_id'	=> 11,
        		'project_info_id'	=> 7,
        		'post'				=> 'Proses lumayan cepat. Asal jangan asal jadi aja.'
        	],
          [
        		'profile_rakyat_id'	=> 12,
        		'project_info_id'	=> 7,
        		'post'				=> 'Semoga sesuai yang diharapkan.'
        	],
          [
        		'profile_rakyat_id'	=> 13,
        		'project_info_id'	=> 8,
        		'post'				=> 'Biaya ga terlalu besar nih?'
        	],
          [
        		'profile_rakyat_id'	=> 17,
        		'project_info_id'	=> 10,
        		'post'				=> 'Saya sudah menunggu-nunggu proyek ini. Semoga terealisai sesuai yang diharapkan.'
        	],
          [
        		'profile_rakyat_id'	=> 7,
        		'project_info_id'	=> 10,
        		'post'				=> 'Mantap. Lanjutkan!'
        	],
          [
        		'profile_rakyat_id'	=> 17,
        		'project_info_id'	=> 10,
        		'post'				=> 'Waktu pelaksanaannya terasa agak terlalu lama ya.'
        	],
          [
        		'profile_rakyat_id'	=> 14,
        		'project_info_id'	=> 9,
        		'post'				=> 'Updatenya mana ya?'
        	]
        ];

        DB::table('project_posts')->insert($posts);
    }
}
