<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paymentController extends Controller
{
    public function cartindex(){
        return view('pages.cart');
    }
    public function checkoutindex(){
        return view('pages.checkout');
    }
}
