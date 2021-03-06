<?php

namespace App\Http\Controllers;

use App\Type_product;
use Illuminate\Http\Request;

class TypeProductController extends Controller
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

            //TODOS LOS TIPOS ORDENADOS DE MANERA ASCENDENTE
            $type_product = Type_product::orderBy('name', 'asc')->get();
            $response = $type_product;

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
     * @param  \App\Type_product  $type_product
     * @return \Illuminate\Http\Response
     */
    public function show(Type_product $type_product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Type_product  $type_product
     * @return \Illuminate\Http\Response
     */
    public function edit(Type_product $type_product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Type_product  $type_product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Type_product $type_product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Type_product  $type_product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Type_product $type_product)
    {
        //
    }
}
