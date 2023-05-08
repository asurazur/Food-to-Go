<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class cart extends Controller
{
    
    public function index()
    {
       
        return view('shop');
    }
}
