<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
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
        //gets the id of the authenticated user
        
        $admin = false;
        // get all the products
        $products = Product::all();
        // if there is an authenticated user, check if admin
        // if yes, get only the products with his id
       
        
        //pass the data to the view
        return view('menu', ['products' => $products, 'admin' => $admin]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        $product = new Product;
        $product->product_name = $req->product_name;
        $product->product_type = $req->product_type;
        $product->product_description = $req->product_description;
        $product->product_image = $req->product_image;
        $product->product_rating = $req->product_rating;
        $product->price = $req->price;
        $product->save();
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
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $product = Product::findOrFail($id); // retrieve the product from the database
        return view('products.show', ['product' => $product]); // pass the product to the view
    }

  

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        $product = Product::find($req->product_id);
        $product->product_name = $req->product_name;
        $product->product_type = $req->product_type;
        $product->product_description = $req->product_description;
        $product->product_image = $req->product_image;
        $product->product_rating = $req->product_rating;
        $product->price = $req->price;
        $product->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product = Product::find($req->product_id)->delete();
    }
}
