<?php

namespace App\Http\Controllers;

use App\Product;
use Exception;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('jwt.auth', ['only' => ['all']]);
        $this->middleware('jwt.auth', ['only' => ['index']]);
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
        try {

            //Listado productos de forma ascendente
            $productos = Product::Where('active', true)->orderBy('name', 'asc')->get();
            $response = $productos;

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

            /*Listado de productos incluyendo tipos de productos
            y la clasificación*/
            $productos = Product::OrderBy('name', 'asc')->with(["type_product", "classification_products"])->get();
            $response = $productos;
            return response()->json($response, 200);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 422);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {

            //Filtra todos los productos y obtiene unicamente el que se solicita
            $productos = Product::Where('id', $id)->WithCount('likes')->with(
                ["type_product", "classification_products"]
            )->first();
            $response = $productos;
            return response()->json($response, 200);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 422);
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function likesTop()
    {
        try {
            $products = Product::Where('active', true)->withCount('likes')->OrderByDesc('likes_count')->with([
                "type_product",
                "classification_products"
            ])->limit(4)->get();
            $response = $products;
            return response()->json($response, 200);
        } catch (Exception $e) {
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bebidasTop()
    {
        try {
            $products = Product::Where('active', true)->Where('type_product_id', '3')->withCount('likes')->OrderByDesc('likes_count')->with([
                "type_product",
                "classification_products"
            ])->limit(4)->get();
            $response = $products;
            return response()->json($response, 200);
        } catch (Exception $e) {
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function platillosTop()
    {
        try {
            $products = Product::Where('active', true)->Where('type_product_id', '5')->withCount('likes')->OrderByDesc('likes_count')->with([
                "type_product",
                "classification_products"
            ])->limit(4)->get();
            $response = $products;
            return response()->json($response, 200);
        } catch (Exception $e) {
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function snacksTop()
    {
        try {
            $products = Product::Where('active', true)->Where('type_product_id', '4')->withCount('likes')->OrderByDesc('likes_count')->with([
                "type_product",
                "classification_products"
            ])->limit(4)->get();
            $response = $products;
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
            //VALIDACION PRODUCTO
            $request->validate([
                'name' => 'required|max:50',
                'description' => 'required|max:50',
                'price' => 'required',
                'type_product_id' => 'required',
                'active' => 'required',
                'images' => 'required|image|mimes:jpg,jpeg,png, gif',
                'classification_products' => 'required'

            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return $this->responseErrors($e->errors(), 422);
        }
        //CREACION DEL PRODUCTO
        $products = new Product();
        $products->name = $request->name;
        $products->description = $request->description;
        $products->price = $request->price;
        $products->type_product_id = $request->type_product_id;
        $products->active = $request->active;

        $image = $request->file('images');

        $image_name = time() . $image->getClientOriginalName();
        \Storage::disk('images')->put($image_name, \File::get($image));

        $products->image = $image_name;


        if ($products->save()) {

            $products->classification_products()->attach(
                $request->input('classification_products') === null ?
                    [] : $request->input('classification_products')
            );
            $response = 'Producto creado!';
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
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //VALIDACION PRODUCTO
        $request->validate([
            'name' => 'required|max:50|unique:products,name',
            'description' => 'required|max:50|',
            'price' => 'required',
            'type_product_id' => 'required',
            'active' => 'required',
        ]);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function responseErrors($errors, $statusHTML)
    {
        $transformed = [];



        foreach ($errors as $field => $message) {
            $transformed[] = [
                'field' => $field,
                'message' => $message[0]
            ];
        }




        return response()->json([
            'errors' => $transformed
        ], $statusHTML);
    }
}
