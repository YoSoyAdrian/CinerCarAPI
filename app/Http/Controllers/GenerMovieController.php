<?php

namespace App\Http\Controllers;

use App\Gener_movie;
use Illuminate\Http\Request;

class GenerMovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        try {

            //TODAS LAS GENEROS ORDENADAS DE MANERA ASCENDENTE
            $gener = Gener_movie::orderBy('name', 'asc')->get();
            $response = $gener;

            return response()->json($response, 200);
        } catch (Exception $e) {
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * Display the specified resource.
     *
     * @param  \App\Gener_movie  $gener_movie
     * @return \Illuminate\Http\Response
     */
    public function show(Gener_movie $gener_movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gener_movie  $gener_movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Gener_movie $gener_movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gener_movie  $gener_movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gener_movie $gener_movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gener_movie  $gener_movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gener_movie $gener_movie)
    {
        //
    }
}
