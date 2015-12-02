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
        	]
        ];

        DB::table('project_posts')->insert($posts);
    }
}
