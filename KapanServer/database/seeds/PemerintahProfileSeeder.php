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
        DB::table('pemerintah_profiles')->insert(
            [
                'email'     => 'test@test.com',
                'password'  => 'testpassword',
                'fullname'  => 'test123'
            ]
        );
    }
}
