<?php

use Illuminate\Database\Seeder;

class Classification_productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //GRANDE 1
        $classification_product = new \App\Classification_product();
        $classification_product->name = 'Grande';
        $classification_product->price = 350;
        $classification_product->save();

        //MEDIANO 2
        $classification_product = new \App\Classification_product();
        $classification_product->name = 'Mediano';
        $classification_product->price = 250;
        $classification_product->save();

        //PEQUEÑO 3
        $classification_product = new \App\Classification_product();
        $classification_product->name = 'Pequeño';
        $classification_product->price = 100;
        $classification_product->save();
    }
}
