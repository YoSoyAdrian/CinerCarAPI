<?php

use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $location = new \App\Location();
        $location->name = 'Alajuela';
        $location->save();

        $location = new \App\Location();
        $location->name = 'San José';
        $location->save();

        $location = new \App\Location();
        $location->name = 'Heredia';
        $location->save();
    }
}
