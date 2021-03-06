<?php

use Illuminate\Database\Seeder;

class Type_productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DULCE 1
        $type_product = new \App\Type_product();
        $type_product->name = 'Dulce';
        $type_product->save();

        //SALADO 2
        $type_product = new \App\Type_product();
        $type_product->name = 'Salado';
        $type_product->save();

        //BEBIDA 3
        $type_product = new \App\Type_product();
        $type_product->name = 'Bebida';
        $type_product->save();

        //SNACKS 4
        $type_product = new \App\Type_product();
        $type_product->name = 'Snacks';
        $type_product->save();

        //Platillos 5
        $type_product = new \App\Type_product();
        $type_product->name = 'Platillos';
        $type_product->save();
    }
}
