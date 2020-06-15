<?php

use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Instancia de movie
        $movie= new \App\Movie();
        $movie->name='Toy Story';
        $movie->synopsis= 'El filme comienza con una misión de reconocimiento llevada a cabo por un grupo de juguetes, encabezados por el vaquero Woody, para identificar los obsequios recibidos por su dueño, Andy, con motivo de la fiesta de su séptimo cumpleaños. Entre los regalos se encuentra una figura de acción, el guerrero espacial Buzz Lightyear, que al poco tiempo se convierte en el nuevo juguete favorito de Andy.';
        

    }
}
