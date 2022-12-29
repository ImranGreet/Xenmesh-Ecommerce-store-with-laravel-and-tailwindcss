<?php

namespace App\Http\Controllers;

use App\Models\SuperAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class SuperAdminController extends Controller
{
    public function getsuperAdmin_registration_path(){
        return view('superAdminPages.registration');
    }
    public function getsuperAdmin_login_path(){
        return view('superAdminPages.login');
    }
    public function authoraization()
    {
        $unAuthorisedAdmins = DB::table('admins')->where('approved', 0)->get();
        return view('superAdminPages.action',['unAuthorised'=>$unAuthorisedAdmins]);
    }
    public function AuthorRegistration(Request $request){
        $affirmData = $request->validate([
            'firstname'=>'required|min:5|max:25',
            'lastname'=>'required|min:5|max:25',
            'username'=>'required|min:5|max:25',
            'email'=>'required|unique:admins',
            'password'=>['required',Password::min(6)],
        ]);
        $affirmData['password']=Hash::make($request->password);
        if($affirmData){
            SuperAdmin::create($affirmData);
        }
        auth('super')->attempt($request->only('email','username', 'password'));
        return redirect()->route('author',auth('super')->id());
    }
    public function authorLogin(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if(Auth::guard('super')->attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('author',auth('super')->id());
        }else{
            return redirect()->route('author_login');
        }
    }

    public function adminLogOut(Request $request)
    {
        Auth::guard('super')->logout();
        return redirect()->route('author_login');
    }
}