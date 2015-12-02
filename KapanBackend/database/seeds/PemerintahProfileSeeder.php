<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PemerintahProfileSeeder extends Seeder
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
                'email'         => 'pemerintah@id.com',
                'password'      => Hash::make('testpass'),
                'fullname'      => 'Menteri Pembangunan',
                'jenis_pejabat' => 'negara',
                'is_active'     => true
            ],
            [
                'email'         => 'gubernur.dki@id.com',
                'password'      => Hash::make('testing'),
                'fullname'      => 'Gubernur DKI Jakarta',
                'jenis_pejabat' => 'daerah',
                'is_active'     => true
            ]
        ];

        DB::table('profile_pemerintah')->insert($profiles);
    }
}
