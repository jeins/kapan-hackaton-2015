<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('PemerintahProfileSeeder');
        $this->call('InfoProjectSeeder');
        $this->call('ProfileRakyatSeeder');
        $this->call('ProjectPostSeeder');
        $this->call('PostCommentsSeeder');
        $this->call('ProjectProgressSeeder');

        Model::reguard();
    }
}
