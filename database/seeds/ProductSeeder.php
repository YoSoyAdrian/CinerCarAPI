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
        $product->price = '1000';
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
        $product->price = '1000';
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
        $product->price = '2500';
        $product->type_product_id = 4;
        $product->active = true;
        $product->save();

        $product->classification_products()->attach(
            [1, 2, 3]
        );

        $product = new \App\Product();
        $product->name = 'Hamburguesa';
        $product->description = 'Hamburguesa';
        $product->price = '3000';
        $product->image = 'https://autocinesmadrid.es/wp-content/uploads/2019/12/hamburguesa-1-300x300.jpg';
        $product->type_product_id = 5;
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
        $product->type_product_id = 5;
        $product->active = true;
        $product->save();
        $product->classification_products()->attach(
            [1, 2, 3]
        );

        $product = new \App\Product();
        $product->name = 'Tres Leches';
        $product->description = 'Tres Leches de chocolate';
        $product->price = '1500';
        $product->image = 'https://d1kxxrc2vqy8oa.cloudfront.net/wp-content/uploads/2019/09/30194330/RFB-2509-5-treslechesdechocolate.jpg';
        $product->type_product_id = 4;
        $product->active = true;
        $product->save();
        $product->classification_products()->attach(
            [1, 2, 3]
        );

        $product = new \App\Product();
        $product->name = 'Waffle';
        $product->description = 'Torre de waffle de chocolate';
        $product->price = '2500';
        $product->image = 'https://www.cucinare.tv/wp-content/uploads/2019/06/Torre-de-waffles-de-chocolate-300x300.jpg';
        $product->type_product_id = 4;
        $product->active = true;
        $product->save();
        $product->classification_products()->attach(
            [1, 3]
        );

        $product = new \App\Product();
        $product->name = 'Donas';
        $product->description = 'Donas de chocolate';
        $product->price = '1000';
        $product->image = 'https://confiteriashernandez.es/wp-content/uploads/2020/01/BERLINA-CHOCOLATE-300x300.jpg';
        $product->type_product_id = 4;
        $product->active = false;
        $product->save();
        $product->classification_products()->attach(
            [1, 3]
        );
        $product = new \App\Product();
        $product->name = 'Brownie';
        $product->description = "Brownie de chocolate";
        $product->price = '1500';
        $product->image = 'https://e00-telva.uecdn.es/assets/multimedia/imagenes/2020/03/09/15837500340935.jpg';
        $product->type_product_id = 4;
        $product->active = true;
        $product->save();
        $product->classification_products()->attach(
            [1, 3]
        );

        $product = new \App\Product();
        $product->name = 'M&M';
        $product->description = "m&m's de chocolate";
        $product->price = '700';
        $product->image = 'https://thecandyland.cl/wp-content/uploads/2020/06/MM-PEANUT-300x300.jpg';
        $product->type_product_id = 4;
        $product->active = false;
        $product->save();
        $product->classification_products()->attach(
            [1, 3]
        );

        $product = new \App\Product();
        $product->name = 'Fanta';
        $product->description = "Fanta Naranja";
        $product->price = '1000';
        $product->image = 'https://cdn.shopify.com/s/files/1/2650/5104/products/fanta-float-square_300x300.jpg?v=1593088351';
        $product->type_product_id = 3;
        $product->active = true;
        $product->save();
        $product->classification_products()->attach(
            [1, 2, 3]
        );

        $product = new \App\Product();
        $product->name = 'Pizza';
        $product->description = "Pizza de pepperoni";
        $product->price = '3000';
        $product->image = 'https://specials-images.forbesimg.com/imageserve/995467932/960x0.jpg?fit=scale';
        $product->type_product_id = 5;
        $product->active = true;
        $product->save();
        $product->classification_products()->attach(
            [1, 3]
        );
        $product = new \App\Product();
        $product->name = 'Hot Dog';
        $product->description = "Hog Dog con salsa de la casa";
        $product->price = '1500';
        $product->image = 'https://quesosdeeuropa.com/wp-content/uploads/2018/07/Receta-Hot-Dog.jpg';
        $product->type_product_id = 4;
        $product->active = true;
        $product->save();
        $product->classification_products()->attach(
            [1, 3]
        );
    }
}
