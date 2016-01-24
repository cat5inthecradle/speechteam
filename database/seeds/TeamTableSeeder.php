<?php

use \database\faker\TeamFaker;
use Illuminate\Database\Seeder;

class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Team', 10)->create();
    }
}
