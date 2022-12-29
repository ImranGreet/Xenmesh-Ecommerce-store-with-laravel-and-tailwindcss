<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function goToCart(){
        return view('userPages.cart.Cart');
    }
    public function goToWish(){
        return view('userPages.cart.Wish');
    }
}