<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Gener_movie;
use App\Vote;
use Exception;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function __construct()
    {
        // $this->middleware('jwt.auth', ['only' => ['all']]);
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
            $movies = Movie::Where('active', true)->OrderBy('name', 'asc')->with(["gener_movies", "classification_movie"])->get();
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
    public function top()
    {
        try {
            $movies = Movie::Where('active', true)->withCount('votes')->OrderByDesc('votes_count')->with([
                "gener_movies",
                "classification_movie"
            ])->limit(3)->get();
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
            $movies = Movie::Where('active', true)->Where('id', $id)->WithCount('votes')->with(
                ["gener_movies", "classification_movie"]
            )->first();
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
        try {

            //VALIDACION PELICULA
            $request->validate([
                'name' => 'required|max:50|unique:movies,name',
                'synopsis' => 'required|max:50|unique:movies,sypnosis',
                'premiere_date' => 'required|date',
                'duration' => 'required|max:50|unique:movies,duration',
                'active' => 'required|in:si,no',
                'classification_movie_id' => 'required',
            ]);

            //CREACION DE LA PELICULA
            $movies = new Movie();
            $movies->name = $request->name;
            $movies->synopsis = $request->synopsis;
            $movies->premiere_date = $request->premiere_date;
            $movies->duration = $request->duration;
            $movies->active = $request->active;
            $movies->classification_movie_id = $request->classification_movie_id;

            //GUARDAMOS LA PELICULA
            $movies->save();

            //VALIDACION PARA SABER SI EL REQUEST TRAE LOS GENEROS
            if ($request->get('gener_movie_id')) {
                $movies->gener_movies()->sync($request->gener_movie_id === null ? [] :
                    $request->get('gener_movie_id'));
            }
            return response()->json($movies, 201);
        } catch (Exception $e) {
            //throw $th;
        }
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
        $request->validate([
            'name' => 'required|max:50|unique:movies,name',
            'synopsis' => 'required|max:50|unique:movies,sypnosis',
            'premiere_date' => 'required|date',
            'duration' => 'required|max:50|unique:movies,duration',
            'active' => 'required|in:si,no',
            'classification_movie_id' => 'required',
        ]);
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
