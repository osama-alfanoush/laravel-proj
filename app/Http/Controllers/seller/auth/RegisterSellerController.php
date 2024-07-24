<?php

namespace App\Http\Controllers\seller\auth;
use App\Models\Seller;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class RegisterSellerController extends Controller
{
    //
    public function registerForm()
  {
    return view('seller.auth.register');
  }

  public function register(Request $request)
  {
    /*$validated = $request->validate([
      'name' => 'required',
      'email' => 'required|email',
      'password' => 'required'
    ]);

    $user = User::create([
      'name' => $validated['name'],
      'email' => $validated['email'],
      'password' => bcrypt($validated['password'])
    ]);

    Seller::create([
      'user_id' => $user->id
    ]);

    auth('seller')->login($user);
    return redirect()->route('seller.home');
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required'
      ]);

      if(! auth()->attempt($credentials)) {
        return back()->withErrors(['message' => 'Invalid credentials']);
      }

      $user = User::where('email', $request->email)->first();

      auth()->login($user);*/

    }
}
