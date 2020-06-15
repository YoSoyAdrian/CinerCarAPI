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
        $location->name = 'General';
        $location->save();

        $location = new \App\Location();
        $location->name = 'VIP';
        $location->save();

        $location = new \App\Location();
        $location->name = 'Palco';
        $location->save();
    }
}
