<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $property = Product::orderBy('created_at','desc')->with('productimage')->get();
        return response()->json($property);
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
        $rules = [
        'user_id' => 'required|integer',
        'name' => 'required|min:3',
        'price' => 'required',
        'quantity' => 'required',
        'sizes' => 'required',
        'category_id' => 'required|integer',
        'collection_id' => 'required|integer',
        'brand_id' => 'required|integer',
        'description' => 'required'
      ];

      $this->validate($request, $rules);

      $data = $request->all();

      $product = Product::create($data);

      return response()->json(['data'=>$product], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
          $product = $product->with('productimage')->get();
          return response()->json($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
      
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
        $product->fill($request->intersect([
            'name'
        ]));
        if($product->isClean())  {
            return response()->json(['error' => 'You need to specified'], 422);
        }
        $product->save();

        return response()->json($product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product = $product->delete();
        return response()->json(['data'=> $product], 200);
    }
}
