<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addCart(Request $request)
    {
        return$data = $request->all();
    }
}
