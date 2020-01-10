<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductImage;
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
        $products = Product::orderBy('created_at','desc')->with('productimage')->get();
        return response()->json($products);
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
        'name' => 'required|min:3',
        'price' => 'required',
        'quantity' => 'required',
        'sizes' => 'required',
        'color' => 'required',
        'onsale' => 'required',
        'category' => 'required|max:12',
        'collection' => 'required|max:6',
        'brand' => 'required|max:20',
        'description' => 'required',
      ];

      $this->validate($request, $rules);

      $data = $request->all();

     
      
      $product = Product::create($data);
       if($request->has('images'))
       {
             $images = $request->images;
             if($product){
            for($i=0; $i < count($images); $i++){
                self::storeImages($product->id, $images[$i]);
            }
          }
       }
      
      

      return response()->json(['data'=>$product], 201);
    }

    public function storeImages($property, $image)
    {
        $data['property_id'] = $property;
        $data['cover_image'] = $image->store('');
        $product = ProductImage::create($data);

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
