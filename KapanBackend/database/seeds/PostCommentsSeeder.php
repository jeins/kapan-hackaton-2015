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
    		],
        [
    			'profile_rakyat_id'	=> 5,
    			'project_posts_id'	=> 3,
    			'comment'			=> 'amin...'
    		],
        [
    			'profile_rakyat_id'	=> 7,
    			'project_posts_id'	=> 6,
    			'comment'			=> 'Bener bos!'
    		],
        [
    			'profile_rakyat_id'	=> 8,
    			'project_posts_id'	=> 7,
    			'comment'			=> 'Kita tunggu aja mas.'
    		],
        [
    			'profile_rakyat_id'	=> 5,
    			'project_posts_id'	=> 7,
    			'comment'			=> 'Iya ya. Semoga gak ngambang.'
    		],
        [
    			'profile_rakyat_id'	=> 19,
    			'project_posts_id'	=> 10,
    			'comment'			=> 'Keliatannya memang gede banget ya. Harus dipantau terus nih.'
    		],
        [
    			'profile_rakyat_id'	=> 9,
    			'project_posts_id'	=> 10,
    			'comment'			=> 'Bener mas *ikut pantau*'
    		],
        [
    			'profile_rakyat_id'	=> 1,
    			'project_posts_id'	=> 10,
    			'comment'			=> 'mari sama2 memantau.'
    		],
        [
    			'profile_rakyat_id'	=> 13,
    			'project_posts_id'	=> 13,
    			'comment'			=> 'Saya rasa cukup pas sih.'
    		],
        [
    			'profile_rakyat_id'	=> 3,
    			'project_posts_id'	=> 13,
    			'comment'			=> 'Lumayan lah. Costnya juga ga terlalu besar.'
    		],
        [
    			'profile_rakyat_id'	=> 7,
    			'project_posts_id'	=> 13,
    			'comment'			=> 'Tapi tetap harus dipantau juga.'
    		]
    	];

        DB::table('post_comments')->insert($comments);
    }
}
