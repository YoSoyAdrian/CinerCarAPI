<?php

namespace App\Http\Controllers;

use App\Billboard;
use App\Movie;
use Carbon\Traits\Converter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Type\Integer;

class BillboardController extends Controller
{


    public function __construct()
    {


        $this->middleware('jwt.auth', ['only' => ['create']]);
        $this->middleware('jwt.auth', ['only' => ['update']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        //
        try {

            /*LISTADO DE CARTELERAS
         INCLUYENDO LOS TICKETS QUE TIENE ASIGNADOS, LOCALIZACION Y PELICULA */
            $billboard = Billboard::OrderBy('current_date', 'asc')->with(["tickets", "location", "movie"])->get();


            return response()->json($billboard, 200);
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
        //
        try {
            $this->validate($request, [
                'location_id' => 'required',
                'movie_id' => 'required',
                'current_date' => 'required|date',
                'available' => 'required',
                'number_space' => 'required',
                'hour' => 'required',
                'visible' => 'required',

            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            //Formato para los errores de validación
            return $this->responseErrors($e->errors(), 422);
        }



        $billboard = new Billboard();

        $billboard->current_date = $request->input('current_date');
        $billboard->available = $request->input('available');
        $billboard->location_id = $request->input('location_id');
        $billboard->number_space = $request->input('number_space');
        $billboard->hour = $request->input('hour');
        $billboard->visible = $request->input('visible');

        $billboard->movie_id = $request->input('movie_id');



        if ($billboard->save()) {

            $billboard->tickets()->attach(
                $request->input('tickets_id') === null ?
                    [] : $request->input('tickets_id')
            );
            $response = 'Cartelera creada!';
            return response()->json($response, 201);
        }
        $response = [
            'msg' => 'Error durante la creación'
        ];
        return response()->json($response, 404);
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
     * @param  \App\Billboard  $billboard
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {

            //FILTRA TODAS LAS PELICULAS Y OBTIENE UNICAMENTE EL QUE SE SOLICITA
            $cartelera = Billboard::Where('available', true)->Where('id', $id)->with(["tickets", "location", "movie"])->first();
            $response = $cartelera;

            return response()->json($response, 200);
        } catch (Exception $e) {
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Billboard  $billboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Billboard $billboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Billboard  $billboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Billboard $billboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Billboard  $billboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Billboard $billboard)
    {
        //
    }
}
