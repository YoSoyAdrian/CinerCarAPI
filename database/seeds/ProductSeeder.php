<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product();
        $product->name = 'Coca Cola';
        $product->description = 'Gaseosa';
        $product->price = '2000';
        $product->estado = true;
        $product->save();

        $product = new \App\Product();
        $product->name = 'Cafe';
        $product->description = 'Bebida caliente';
        $product->price = '2500';
        $product->estado = true;
        $product->save();

        $product = new \App\Product();
        $product->name = 'Palomitas';
        $product->description = 'Dulces o Saladas';
        $product->price = '3500';
        $product->estado = true;
        $product->save();
    }
}
