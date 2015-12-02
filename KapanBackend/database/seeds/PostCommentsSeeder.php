<?php

use Illuminate\Database\Seeder;

class PostCommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$comments = [
    		[
    			'profile_rakyat_id'	=> 2,
    			'project_posts_id'	=> 1,
    			'comment'			=> 'coba dibaca yang bener deskripsinya gan.'
    		],
    		[
    			'profile_rakyat_id'	=> 1,
    			'project_posts_id'	=> 1,
    			'comment'			=> 'udah tapi ttp masih ga ngerti gan.'
    		],
    		[
    			'profile_rakyat_id'	=> 1,
    			'project_posts_id'	=> 3,
    			'comment'			=> 'siap memantau..'
    		]
    	];

        DB::table('post_comments')->insert($comments);
    }
}
