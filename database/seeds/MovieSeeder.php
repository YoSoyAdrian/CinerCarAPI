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
        $movie = new \App\Movie();
        $movie->name = 'Toy Story';
        $movie->synopsis = 'El filme comienza con una misión de reconocimiento llevada a cabo por un grupo de juguetes, encabezados por el vaquero Woody, para identificar los obsequios recibidos por su dueño, Andy, con motivo de la fiesta de su séptimo cumpleaños. Entre los regalos se encuentra una figura de acción, el guerrero espacial Buzz Lightyear, que al poco tiempo se convierte en el nuevo juguete favorito de Andy.';
        $movie->premiere_date = '1995-11-19';
        $movie->duration = '1h 30m';
        $movie->image = 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/GdMDcacJra4ZmDaBIRASIpzjmU.jpg';
        $movie->banner = "https://image.tmdb.org/t/p/original/e6bG3pp3cpImIDObC62bxmsarto.jpg";
        $movie->active = true;
        $movie->classification_movie_id = 2;
        $movie->save();
        $movie->gener_movies()->attach(
            [1, 2, 3, 4]
        );

        //Instancia de movie
        $movie = new \App\Movie();
        $movie->name = 'Viaje Al Centro De La Tierra 2';
        $movie->synopsis = 'Sean (Hutcherson) recibe una llamada de socorro desde una misteriosa isla, que no aparece en los mapas. Se trata de un lugar con extrañas formas de vida. Sean emprenderá la búsqueda acompañado de su padrastro (Johnson), de un piloto de helicóptero (Guzman) y su hermosa y temperamental hija (Hudgens). Secuela de "Viaje al centro de la tierra 3D".';
        $movie->premiere_date = '2012-02-10';
        $movie->duration = '1h 34m';
        $movie->image = 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/hAy2yUav8QPnDzfOGihNI527NjY.jpg';
        $movie->banner = "https://image.tmdb.org/t/p/original/9f33P2UvXw8HnLNB3cHdzI64Xpq.jpg";
        $movie->active = true;
        $movie->classification_movie_id = 2;
        $movie->save();
        $movie->gener_movies()->attach(
            [1, 2, 5, 8]
        );

        //Instancia de movie
        $movie = new \App\Movie();
        $movie->name = 'Spider-Man: Homecoming';
        $movie->synopsis = 'Peter Parker comienza a experimentar su recién descubierta identidad como el superhéroe Spider-Man. Después de la experiencia vivida con los Vengadores, Peter regresa a casa, donde vive con su tía. Bajo la atenta mirada de su mentor Tony Stark, Peter intenta mantener una vida normal como cualquier joven de su edad, pero interrumpe en su rutina diaria el nuevo villano Vulture y, con él, lo más importante de la vida de Peter comenzará a verse amenazado.';
        $movie->premiere_date = '2017-07-07';
        $movie->duration = '1h 50m';
        $movie->image = 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/c24sv2weTHPsmDa7jEMN0m2P3RT.jpg';
        $movie->banner = "https://image.tmdb.org/t/p/original/vc8bCGjdVp0UbMNLzHnHSLRbBWQ.jpg";
        $movie->active = true;
        $movie->classification_movie_id = 2;
        $movie->save();
        $movie->gener_movies()->attach(
            [4, 5, 6, 7]
        );


        $movie = new \App\Movie();
        $movie->name = 'Joker';
        $movie->synopsis = 'Arthur Fleck es un hombre ignorado por la sociedad, cuya motivación en la vida es hacer reír. Pero una serie de trágicos acontecimientos le llevarán a ver el mundo de otra forma. Película basada en Joker, el popular personaje de DC Comics y archivillano de Batman, pero que en este film toma un cariz más realista y oscuro.';
        $movie->premiere_date = '2019-10-04';
        $movie->duration = '2h 2m';
        $movie->image = 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/udDclJoHjfjb8Ekgsd4FDteOkCU.jpg';
        $movie->banner = "https://image.tmdb.org/t/p/original/hd8H2TvqtAbqYnBUbf5AdXZf87s.jpg";
        $movie->active = true;
        $movie->classification_movie_id = 2;
        $movie->save();
        $movie->gener_movies()->attach(
            [4, 5, 6, 7]
        );
        $movie = new \App\Movie();
        $movie->name = 'El libro de la selva';
        $movie->synopsis = 'Después de ser abandonado en la selva, una familia de lobos cría al pequeño cachorro humano Mowgli. Gracias a la manada de lobos, sale adelante hasta ser capaz de enfrentarse por sí mismo a los peligros de la selva. Pero con la llegada del peligroso Shere Khan, Mowgli deja de ser bien recibido. Este temible tigre, resentido por las heridas que le ha ocasionado el hombre, ha prometido eliminar toda amenaza humana en la selva.';
        $movie->premiere_date = '2016-04-15';
        $movie->duration = '1h 45m';
        $movie->image = 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/mSN4s4qUbl7aI8rhH6PVt7WexCS.jpg';
        $movie->banner = "https://image.tmdb.org/t/p/original/kOccWpdlHPMmkSU2gsmtz9Fjuhj.jpg";
        $movie->active = true;
        $movie->classification_movie_id = 2;
        $movie->save();
        $movie->gener_movies()->attach(
            [4, 5, 6, 7]
        );

        $movie = new \App\Movie();
        $movie->name = 'Harry Potter y la piedra filosofal';
        $movie->synopsis = 'Harry Potter es un huérfano que vive con sus desagradables tíos, los Dursley, y su repelente primo Dudley. Se acerca su undécimo cumpleaños y tiene pocas esperanzas de recibir algún regalo, ya que nunca nadie se acuerda de él. Sin embargo, pocos días antes de su cumpleaños, una serie de misteriosas cartas dirigidas a él y escritas con una estridente tinta verde rompen la monotonía de su vida: Harry es un mago y sus padres también lo eran.';
        $movie->premiere_date = '2017-07-07';
        $movie->duration = '2h 32m';
        $movie->image = 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/c24sv2weTHPsmDa7jEMN0m2P3RT.jpg';
        $movie->banner = "https://image.tmdb.org/t/p/original/hziiv14OpD73u9gAak4XDDfBKa2.jpg";
        $movie->active = true;
        $movie->classification_movie_id = 2;
        $movie->save();
        $movie->gener_movies()->attach(
            [4, 5, 6, 7]
        );

        $movie = new \App\Movie();
        $movie->name = 'Harry Potter y la cámara secreta';
        $movie->synopsis = 'Harry regresa a su segundo año a Hogwarts, pero descubre que cosas malas ocurren debido a que un sitio llamado la Cámara de los Secretos ha sido abierto por el heredero de Slytherin y hará que los hijos de muggles, los impuros, aparezcan petrificados misteriosamente por un animal monstruoso.';
        $movie->premiere_date = '2002-11-15';
        $movie->duration = '2h 30m';
        $movie->image = 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/bhCfAzeMMg7GyLDT11yVM2i1NPh.jpg';
        $movie->banner = "https://image.tmdb.org/t/p/original/vHLC1uixLRE6XPaqIutCMTeiNt4.jpg";
        $movie->active = true;
        $movie->classification_movie_id = 2;
        $movie->save();
        $movie->gener_movies()->attach(
            [4, 5, 6, 7]
        );

        $movie = new \App\Movie();
        $movie->name = 'Harry Potter y el prisionero de Azkaban';
        $movie->synopsis = 'Harry está deseando que termine el verano para comenzar un nuevo curso en Hogwarts, y abandonar lo antes posible la casa de sus despreciables tíos, los Dursley. Lo que desconoce Harry es que va a tener que abandonar Privet Drive antes de tiempo e inesperadamente después de convertir a su tía Marge en un globo gigante. Un autobús noctámbulo, y encantado por supuesto, le llevará a la taberna El Caldero Chorreante, donde le espera nada menos que Cornelius Fudge, el Ministro de Magia.';
        $movie->premiere_date = '2004-06-04';
        $movie->duration = '2h 21m';
        $movie->image = 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/wF9aoo4YZmpKP4bZPSy4Zwwek6G.jpg';
        $movie->banner = "https://image.tmdb.org/t/p/original/v2K8QaAQD0pmEaUTUeV8MXMq1qx.jpg";
        $movie->active = true;
        $movie->classification_movie_id = 2;
        $movie->save();
        $movie->gener_movies()->attach(
            [4, 5, 6, 7]
        );

        $movie = new \App\Movie();
        $movie->name = 'Harry Potter y el cáliz de fuego';
        $movie->synopsis = 'En el cuarto año en Hogwarts, Harry se enfrenta al mayor de los desafíos y peligros de la saga. Cuando es elegido bajo misteriosas circunstancias como el competidor que representará a Hogwarts en el Torneo Triwizard, Harry deberá competir contra los mejores jóvenes magos de toda Europa. Pero mientras se prepara, aparecen pruebas que manifiestan que Lord Voldemort ha regresado. Antes de darse cuenta, Harry no solo estará luchando por el campeonato sino también por su vida';
        $movie->premiere_date = '2017-07-07';
        $movie->duration = '1h 50m';
        $movie->image = 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/6Cn5Lx9kqhXzTNV5QXwZ3RW5pBg.jpg';
        $movie->banner = "https://image.tmdb.org/t/p/original/8f9dnOtpArDrOMEylpSN9Sc6fuz.jpg";
        $movie->active = true;
        $movie->classification_movie_id = 2;
        $movie->save();
        $movie->gener_movies()->attach(
            [4, 5, 6, 7]
        );
    }
}
