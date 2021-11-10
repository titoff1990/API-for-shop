<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orderCreation (Request $request)
    {
        return view('order_creation');
    }   
}
