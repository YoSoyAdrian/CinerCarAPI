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
        $type_product = new \App\Type_product();
        $type_product->name = 'Dulce';

        $type_product->save();

        $type_product = new \App\Type_product();
        $type_product->name = 'Salado';

        $type_product->save();

        $type_product = new \App\Type_product();
        $type_product->name = 'Bebida';

        $type_product->save();

        $type_product = new \App\Type_product();
        $type_product->name = 'Snacks';

        $type_product->save();
    }
}
