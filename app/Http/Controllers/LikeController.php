<?php

namespace App\Http\Controllers;

use App\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
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
     * @param  \App\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function show(Like $like)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function edit(Like $like)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        //ACTUALIZAR LIKE
        try {
            //ACTUALIZACION O CREACION DEL LIKE
            $like = Like::Where('product_id', $id)->value('like_count');
            $product = Like::Where('product_id', $id)->value('id');


            $updateLike = Like::Where('id', $product)->updateOrInsert(['product_id' => $product], ['like_count' => ($like + 1)])->value('like_count');
            $data = [
                'Producto' => $product,
                'Cant.Like Anterior' => $like,
                'Cant.Like Nueva' => $updateLike
            ];

            return response()->json($data, 202);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return $this->responseErrors($e->errors(), 422);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function destroy(Like $like)
    {
        //
    }
}
