<?php

namespace App\Http\Controllers\admin\auth;
use App\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminLoginController extends Controller
{
    //
    public function login(){
        return view('admin.auth.login');
    }
    public function checkLogin(Request $request){
        $request->validate([
            "email"         =>      ['required','email'],
            "password"        =>      ['required','string']
        ]);
        if(Auth::guard('admin')->attempt($request->only('email','password'))){
                return redirect()->route('admin.dashboard.home');
        }else{
            return redirect()->back()->withInput(['email' => $request->email])->withErrors(['errorResponse'=> 'Invalid credentials']);
        }

    }
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.dashboard.login');
    }
}
