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
        //
        $classification_product = new \App\Classification_product();
        $classification_product->name = 'Grande';
        $classification_product->save();

        $classification_product = new \App\Classification_product();
        $classification_product->name = 'Mediano';
        $classification_product->save();

        $classification_product = new \App\Classification_product();
        $classification_product->name = 'Pequeño';
        $classification_product->save();
    }
}
