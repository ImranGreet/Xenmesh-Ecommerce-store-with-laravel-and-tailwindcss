<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index(){
        return view('userPages.Registration');
    }
    public function loginpage(){
        return view('userPages.Login');
    }
    public function userRegistration(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255|min:5',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        auth()->attempt($request->only('email', 'password'));
        return redirect()->route('home');
    }
    public function userLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!auth()->attempt($request->only('email', 'password'))) {
            return back()->with('status', 'Invalid login details');
        }
        return redirect()->route('home');
    }
    public function userLogOut()
    {
        auth()->logout();
        return redirect()->route('home');
    }
    public function user_contact(){
        return view('userPages.ContactUs');
    }
}