<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ProfileRakyatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profiles = [
        	[
        		'fullname'	=> 'Sebastian Wolf',
        		'email'		=> 'sebastian@gmail.com',
        		'password'	=> Hash::make('mautauaja')
        	],
        	[
        		'fullname'	=> 'Sumardi Bastian',
        		'email'		=> 'sumardi@gmail.com',
        		'password'	=> Hash::make('testhellow')
        	],
        ];

        DB::table('profile_rakyat')->insert($profiles);
    }
}
