<?php

use Illuminate\Database\Seeder;

class PemerintahProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profile_pemerintah')->insert(
            [
                'email'     => 'test@test.com',
                'password'  => 'testpassword',
                'fullname'  => 'test123'
            ]
        );
    }
}
