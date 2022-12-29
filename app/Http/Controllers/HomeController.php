<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function getNavbarAndFooter()
    {
        $category=DB::table('products')->select('category')->distinct()->get();
        $categories = [];
        foreach ($category as $cat) {
            array_push($categories, $cat);
        }
    }
    public function index(){
        $products = Product::all();
        return view('userPages.Home',['products'=>$products]);
    }
    public function getProDetails($id){
        $product = Product::all()->where('id', $id);
        $relatedProducts = DB::table('products')->whereNot('id', $id)->get();
        return view('userPages.Productdetails',['product'=>$product,'related_products'=>$relatedProducts]);
    }

}