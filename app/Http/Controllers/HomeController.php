<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('/');
    }
    public function favorites()
{
    // get list of favorite items
    $favorites = [
        ['name' => 'Spaghetti', 'price' => 70.00],
        ['name' => 'Turon', 'price' => 30.00],
        // add more items as needed
    ];

    return view('favorites', compact('favorites'));
}
}
