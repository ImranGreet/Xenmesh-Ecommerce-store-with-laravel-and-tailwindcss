<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function show(){
        return view('adminPages.InsertProduct');
    }
    public function update_way($product_id){
        $product = DB::table('products')->where('id',$product_id)->get();
        return view('adminPages.edit_product',['product'=>$product]);
    }

    public function product_crud($id){
        $products = DB::table('products')->where('admin_id', $id)->paginate(8);
        return view('adminPages.Operation',['products'=>$products]);
    }

    public function insertNewProduct(Request $request)
    {
        $affirmData = $this->validate($request,[
            'title'=>'required',
            'category'=>'required',
            'description'=>'required',
            'image'=>'required',
            'price'=>'required'
        ]);
        /*authrosed admin id*/
         $affirmData['admin_id'] = Auth::guard('admin')->id();
         if($request->file('image')){
            $file = date('Y-m-d').'uploaded time'.time().'client_ip'.$request->ip().$request->file('image')->getClientOriginalName();
            $path = trim($file);
            $affirmData['image'] = $path;
            /*insert product info into database*/
            Product::create($affirmData);
            $request->file('image')->storeAs('image/', $path,'local');
            return back()->with('status','Product added succesfully');
        }else {
            return back()->with('status', 'Invalid In Your file');
        }

    }

    public function updtaeProductInfo(Request $request,$id)
    {
        $affirmData = $request->validate([
            'admin_id'=>'required',
            'title' => 'required',
            'price'=>'required',
            'category'=>'required',
            'description'=>'required',
            'image'=>'required'
        ]);
        $affirmData['admin_id'] = Auth::guard('admin')->id();
        $admin_id=$affirmData['admin_id'];

        if($request->file('image')){
            $file = date('Y-m-d').'uploaded time'.time().'client_ip'.$request->ip().$request->file('image')->getClientOriginalName();
            $path =trim($file);
            $affirmData['image']=$path;

            /*product to delete*/
            $productToDelete = DB::table('products')->where('id',$id)->orWhere('admin_id',$admin_id)->get();
            foreach($productToDelete as $product){
                Storage::disk('local')->delete('image/'.$product->image);
                /*product to update*/
                $request->file('image')->storeAs('image/',$path,'local');
                DB::table('products')->where('id',$id)->orWhere('admin_id',$admin_id)->update($affirmData);
            }
            return back()->with('status','Product added succesfully');
           }else{
           return back()->with('status', 'Invalid In Your file');
           }

    }

    public function deleteAproduct($id,$admin_id)
    {
        $productToDelete = DB::table('products')->where('id',$id)->orWhere('admin_id',$admin_id)->get();

        foreach($productToDelete as $po)
        {
         Storage::disk('local')->delete('image/'.$po->image);
         DB::table('products')->where('id',$id)->orWhere('admin_id',$admin_id)->delete();
         return back()->with('status','Product deleted succesfully');
        }
    }

}