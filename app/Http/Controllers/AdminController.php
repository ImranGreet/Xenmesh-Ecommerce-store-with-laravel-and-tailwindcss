<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Password;

class AdminController extends Controller
{

    public function show()
    {
        $products = DB::table('products')->get();
        return view('adminPages.Operation',['products'=>$products]);
    }

    public function index()
    {
        return view('adminPages.Home');
    }

    public function AdminRegistrationPath(Request $request)
    {
        return view('adminPages.Registration');
    }
    public function AdminRegistration(Request $request)
    {
        $affirmData = $request->validate([
            'name'=>'required|min:5|max:25',
            'username'=>'required|min:5|max:25',
            'email'=>'required|unique:admins',
            'password'=>['required',Password::min(6)],
        ]);
        $affirmData['password']=Hash::make($request->password);
        if($affirmData){
            Admin::create($affirmData);
        }
        auth('admin')->attempt($request->only('email','username', 'password'));
        return redirect()->route('pro_crud');
    }
    public function adminLoginPath(Request $request)
    {
        return view('adminPages.Login');
    }
    public function adminLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if(Auth::guard('admin')->attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('pro_crud',auth('admin')->id());
        }else{
            return redirect()->route('adminlogin_path');
        }
    }
    public function adminLogOut(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect()->route('adminlogin');
    }

}
