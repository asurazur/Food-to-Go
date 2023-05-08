<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class rateProduct extends Controller
{
    public function rateProduct(Request $request, $product_id)
{
    $user_rating = $request->input('rating');

    // Save the user rating to the database
    $rating = new ProductRating;
    $rating->product_id = $product_id;
    $rating->user_id = Auth::user()->id;
    $rating->rating = $user_rating;
    $rating->save();

    // Update the product rating
    $product = Product::find($product_id);
    $product->rating_sum += $user_rating;
    $product->rating_count++;
    $product->save();

    // Return a response to the user
    return redirect()->back()->with('success', 'Thank you for rating this product!');
}
}
