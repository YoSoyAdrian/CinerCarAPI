<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name = 'Admin';
        $user->email = 'Admin@gmail.com';
        $user->password = bcrypt('123456');
        $user->rol_id = 1;
        $user->save();
    }
}
