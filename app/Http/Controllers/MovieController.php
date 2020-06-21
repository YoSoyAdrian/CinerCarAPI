<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //TODAS LAS PELICULAS ORDENADAS DE MANERA ASCENDENTE
        try {
            $movies = Movie::Where('active', true)->orderBy('name', 'asc')->get();
            $response = [$movies];

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
            $movies = Movie::OrderBy('name', 'asc')
                ->with(["gener_movies", "classification_movie"])->get();
            $response = [$movies];
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
        //FILTRA TODAS LAS PELICULAS Y OBTIENE UNICAMENTE EL QUE SE SOLICITA
        try {
            /*Obtener un videojuego*/
            $movies = Movie::Where('id', $id)->WithCount('votes')->with(
                ["gener_movies", "classification_movie"]
            )->first();
            $response = [$movies];
            return response()->json($response, 200);
        } catch (Exception $e) {
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //INSTANCIA PARA CREAR UNA PELICULA
        $movie = new Movie();
        $movie->name->$request->name;
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        //
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
