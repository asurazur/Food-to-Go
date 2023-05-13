<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Canteen;

class CanteensController extends Controller
{
    function getCanteens()
    {
        $isAdmin = false;
        $user = Auth::user();

        if ($user != null){
            if($user->is_admin){
                $isAdmin = true;
            }
        }

        $stall = Canteen::all();

        return view('canteen', [
            'canteens' => $stall,
        ]);
        
    }
}
