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
        $product->image = 'https://cdn.catawiki.net/assets/marketing/stories-images/4635-3732dd85450174fc8959c0861d234fb230018779-og_image.jpg';
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
        $product->image = 'https://img.freepik.com/foto-gratis/brown-salpica-bebida-taza-te-sobre-fondo-marron_155003-4164.jpg?size=626&ext=jpg';
        $product->price = '2500';
        $product->type_product_id = 3;
        $product->active = true;
        $product->save();

        $product->classification_products()->attach(
            [1, 2, 3]
        );
        $product = new \App\Product();
        $product->name = 'Malteda';
        $product->description = 'Bebida fresa, vainilla y chocolate';
        $product->image = 'https://www.cucinare.tv/wp-content/uploads/2020/01/Malteadas-1-1024x579.jpg';
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
        $product->image = 'https://autocinesmadrid.es/wp-content/uploads/2019/12/palomitas-300x300.jpg';
        $product->price = '3500';
        $product->type_product_id = 1;
        $product->active = true;
        $product->save();
        $product->image='';
        $product->classification_products()->attach(
            [1, 2, 3]
        );

        $product = new \App\Product();
        $product->name = 'Hamburguesa';
        $product->description = 'Hamburguesa';
        $product->price = '5000';
        $product->image = 'https://autocinesmadrid.es/wp-content/uploads/2019/12/hamburguesa-1-300x300.jpg';
        $product->type_product_id = 2;
        $product->active = true;
        $product->save();
        $product->classification_products()->attach(
            [1, 2, 3]
        );
        $product = new \App\Product();
        $product->name = 'Nachos';
        $product->description = 'Nachos de carne';
        $product->price = '3500';
        $product->image = 'https://autocinesmadrid.es/wp-content/uploads/2019/12/nachos-300x300.jpg';
        $product->type_product_id = 2;
        $product->active = true;
        $product->save();
        $product->classification_products()->attach(
            [1, 2, 3]
        );
    }
}
