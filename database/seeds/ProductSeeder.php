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
        $product->type_product_id = 3;
        $product->active = true;
        $product->save();

        $product->classification_products()->attach(
            [1, 2, 3]
        );
        $product = new \App\Product();
        $product->name = 'Café';
        $product->description = 'Bebida caliente';

        $product->price = '2500';
        $product->type_product_id = 3;
        $product->active = true;
        $product->save();

        $product->classification_products()->attach(
            [1, 2, 3]
        );

        $product = new \App\Product();
        $product->name = 'Palomita';
        $product->description = 'Palomitas Dulces';

        $product->price = '3500';
        $product->type_product_id = 1;
        $product->active = true;
        $product->save();

        $product->classification_products()->attach(
            [1, 2, 3]
        );

        $product = new \App\Product();
        $product->name = 'Palomita';
        $product->description = 'Palomitas Saladas';

        $product->price = '3750';
        $product->type_product_id = 2;
        $product->active = true;
        $product->save();
        $product->classification_products()->attach(
            [1, 2, 3]
        );
    }
}
