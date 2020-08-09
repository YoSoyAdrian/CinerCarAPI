<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Gener_movie;
use App\Vote;
use App\Classification_movie;
use Exception;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function __construct()
    {

        //$this->middleware('jwt.auth', ['only' => ['create']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {

            //TODAS LAS PELICULAS ORDENADAS DE MANERA ASCENDENTE
            $movies = Movie::Where('active', true)->orderBy('name', 'asc')->get();
            $response = $movies;

            return response()->json($response, 200);
        } catch (Exception $e) {
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        try {

            /*LISTADO DE PELICULAS
         INCLUYENDO LOS GENEROS QUE TIENE ASIGNADOS
         Y LA CLASIFICACION*/
            $movies = Movie::OrderBy('name', 'asc')->with(["gener_movies", "classification_movie"])->addSelect(['vote_count' => Vote::select('vote_count')->WhereColumn('movie_id', 'movies.id')])->get();
            $response = $movies;
            return response()->json($response, 200);
        } catch (Exception $e) {
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function votosTop()
    {
        try {
            $movies = Movie::Where('active', true)->addSelect(['vote_count' => Vote::select('vote_count')->WhereColumn('movie_id', 'movies.id')])->limit(4)->get();
            $response = $movies;
            return response()->json($response, 200);
        } catch (Exception $e) {
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {

            //FILTRA TODAS LAS PELICULAS Y OBTIENE UNICAMENTE EL QUE SE SOLICITA
            $movies = Movie::Where('active', true)->Where('id', $id)->with(
                ["gener_movies", "classification_movie"]
            )->addSelect(['classification_name' => Classification_movie::select('name')->WhereColumn('classification_movie_id', 'classification_movies.id')])->addSelect(['vote_count' => Vote::select('vote_count')->WhereColumn('movie_id', 'movies.id')])->first();
            $response = $movies;
            return response()->json($response, 200);
        } catch (Exception $e) {
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        /* Request entradas del formulario enviadas,
            debe establecer las entradas requeridas para crear el videojuego
         */
        //Especificar las reglas de validación para los campos del videojuego
        //https://laravel.com/docs/7.x/validation#available-validation-rules
        try {
            $this->validate($request, [
                'name' => 'required|min:5|string',
                'synopsis' => 'required|min:10|string',
                'premiere_date' => 'required|date',
                'duration' => 'required',
                'active' => 'required|in:1,0',
                'classification_movie_id' => 'required|exists:classification_movies,id',
                'gener_movies' => 'required|exists:gener_movies,id',
                'image' => 'required|image|mimes:jpg,jpeg,png, gif',
                'banner' => 'required|image|mimes:jpg,jpeg,png, gif',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            //Formato para los errores de validación
            return $this->responseErrors($e->errors(), 422);
        }


        $movie = new Movie();
        $movie->name = $request->input('name');
        $movie->synopsis = $request->input('synopsis');
        $movie->premiere_date = $request->input('premiere_date');
        $movie->duration = $request->input('duration');
        $movie->active = $request->input('active');
        $movie->classification_movie_id = $request->input('classification_movie_id');


        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('public');
            $file_path = \Storage::url($image);
            $url = asset($file_path);
            $movie->image = $url;
        }
        if ($request->hasFile('banner')) {
            $banner = $request->file('banner')->store('public');
            $file_path = \Storage::url($banner);
            $url = asset($file_path);
            $movie->banner = $url;
        }



        /*

        Relación de uno a muchos
        https://laravel.com/docs/7.x/eloquent-relationships#updating-belongs-to-relationships

*/
        if ($movie->save()) {

            $movie->gener_movies()->attach(
                $request->input('gener_movies') === null ?
                    [] : $request->input('gener_movies')
            );

            $voto = new Vote();
            $voto->movie_id = $movie->id;
            $voto->vote_count = 0;
            $voto->save();

            $response = 'Pelicula creada!';
            return response()->json($response, 201);
        }
        $response = [
            'msg' => 'Error durante la creación'
        ];
        return response()->json($response, 404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
        //VALIDACION PELICULA

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $movies = Movie::find($id);
        foreach ($movies->gener_movies as $gener_id) {
        }

        return response()->json($movies, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
