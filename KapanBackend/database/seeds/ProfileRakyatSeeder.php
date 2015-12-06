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
          [
        		'fullname'	=> 'Javier Sumanto',
        		'email'		=> 'sumanto@gmail.com',
        		'password'	=> Hash::make('akusumantohihi')
        	],
          [
        		'fullname'	=> 'Michael Cecep',
        		'email'		=> 'cecep@gmail.com',
        		'password'	=> Hash::make('cecepgorbacep')
        	],
          [
        		'fullname'	=> 'Ricki Putirai',
        		'email'		=> 'ricky@gmail.com',
        		'password'	=> Hash::make('akupenyerang')
        	],
          [
        		'fullname'	=> 'Boaz Igbonefo',
        		'email'		=> 'boaz@gmail.com',
        		'password'	=> Hash::make('papuamerdeka')
        	],
          [
        		'fullname'	=> 'Bambang Novanto',
        		'email'		=> 'bambang@gmail.com',
        		'password'	=> Hash::make('bamssamson')
        	],
          [
        		'fullname'	=> 'Setya Pamungkas',
        		'email'		=> 'setya@gmail.com',
        		'password'	=> Hash::make('akulelakisetia')
        	],
          [
        		'fullname'	=> 'Jan Gayus',
        		'email'		=> 'gayus@gmail.com',
        		'password'	=> Hash::make('anakimigrasi')
        	],
          [
        		'fullname'	=> 'Harry Potter',
        		'email'		=> 'harry@gmail.com',
        		'password'	=> Hash::make('wingodiumleviosa')
        	],
          [
        		'fullname'	=> 'Albus Dummydor',
        		'email'		=> 'albus@gmail.com',
        		'password'	=> Hash::make('youshallnotpass!')
        	],
          [
        		'fullname'	=> 'Sammy Situbondo',
        		'email'		=> 'samsitubondo@gmail.com',
        		'password'	=> Hash::make('passwordwuhuuuu')
        	],
          [
        		'fullname'	=> 'Raditya Mika',
        		'email'		=> 'raditmika@gmail.com',
        		'password'	=> Hash::make('pagimingguiko')
        	],
          [
        		'fullname'	=> 'Arja Wituna',
        		'email'		=> 'arjawituna@gmail.com',
        		'password'	=> Hash::make('sumurlihatjidatsaya!')
        	],
          [
        		'fullname'	=> 'Limbat Idol',
        		'email'		=> 'limbatidol@gmail.com',
        		'password'	=> Hash::make('akupendiam')
        	],
          [
        		'fullname'	=> 'Erik Aubameyang',
        		'email'		=> 'erikau@gmail.com',
        		'password'	=> Hash::make('erikyolo')
        	],
          [
        		'fullname'	=> 'El Piero',
        		'email'		=> 'elpiero@gmail.com',
        		'password'	=> Hash::make('akuanakterbuanghiks')
        	],
          [
        		'fullname'	=> 'Agung Ballotelli',
        		'email'		=> 'agungganteng@gmail.com',
        		'password'	=> Hash::make('ototkawat')
        	],
          [
        		'fullname'	=> 'Ibu Kos',
        		'email'		=> 'ibukos@gmail.com',
        		'password'	=> Hash::make('koskosan')
        	],
          [
        		'fullname'	=> 'Epan Limas',
        		'email'		=> 'epan6@gmail.com',
        		'password'	=> Hash::make('pemainmudaU19')
        	]
        ];

        DB::table('profile_rakyat')->insert($profiles);
    }
}
