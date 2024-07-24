<?php

namespace App\Http\Controllers\admin\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use App\Models\Admin;
class AdminRegisterController extends Controller
{
    //
    public function register(){
        return view('admin.auth.register');
    }
    public function store(Request $request){
        $adminKey   =   'OMF';
        if($request->admin_key == $adminKey){
                $request->validate([
                    'name'          =>          ['required', 'string', 'max:255'],
                    'admin_key'     =>          ['required','string'],
                    'email'         =>          ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'password'      =>          ['required', 'string', 'min:8', 'confirmed'],
                ]);

                $data=$request->except(['password_confirmation','_token','admin_key']);
                    $data['password']=Hash::make($request->password);
                Admin::create($data);
                return redirect()->route('admin.dashboard.login');
        }else{
            return redirect()->back()->with('errorResponse','You do not have permission for this  ');
        }

    }
}
