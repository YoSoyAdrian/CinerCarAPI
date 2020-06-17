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
        $user->name = 'Usuario 1';
        $user->email = 'usuario1@gmail.com';
        $user->password = bcrypt('123456');
        $user->rol_id = 1;
        $user->save();

        $user->name = 'Usuario 2';
        $user->email = 'usuario2@gmail.com';
        $user->password = bcrypt('123456');
        $user->rol_id = 1;
        $user->save();
    }
}
