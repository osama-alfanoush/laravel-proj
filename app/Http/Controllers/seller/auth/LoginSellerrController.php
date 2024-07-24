<?php

namespace App\Http\Controllers\seller\auth;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginSellerrController extends Controller
{
    public function login()
    {
      return view('seller.auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
          ]);

          if(!auth()->attempt($credentials)) {
            return back()->withErrors(['email' => 'Invalid Credentials']);
          }

          return redirect()->route('seller.profile.setup');
    }
}
