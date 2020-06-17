<?php

use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol=new \App\Rol();
        $rol->name='administrador';

        $rol->save();

        $rol = new \App\Rol();
        $rol->name ='cliente';
      
        $rol->save();



    }
}
