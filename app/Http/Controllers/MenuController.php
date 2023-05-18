<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Canteen;
use Auth;


class MenuController extends Controller
{
    //
    function getMenu(Request $request) {
       $is_admin = false;
       $user = Auth::user();
       if($user != null){
        if($user->is_admin){
            $is_admin = true;
        }
       }

       $products= Product::where('canteen_id', $request->id)->get();
       $canteen= Canteen::find($request->id);
       
       return view('menu',[
        'products'=> $products,
        'canteen'=> $canteen['name'],
        'is_admin'=> $is_admin
       ]);
    }
}
