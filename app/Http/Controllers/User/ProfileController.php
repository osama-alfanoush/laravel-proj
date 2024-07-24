<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;
use App\Models\Category;
use App\Models\Product;
class ProfileController extends Controller
{
    //
    public function index()
    {
        $user = auth()->user();

        return view('user.profile', ['user' => $user]);
    }
    public function becomeSeller(){
        Auth::logout();

        return redirect()->route('seller.profile.setup');

    }
    public function edit($id)
    {
      $user = User::findOrFail($id);

      return view('user.edit', compact('user'));
    }

    public function update(Request $request,int $user)
    {
        $user = User::findOrFail($user);

        $validated = $request->validate([
            'name' => 'required',
            'phone' => 'required|numeric',
            'gender' => 'required|in:male,female',
            'location'  => 'required',

        ]);

        $user->update([
            'name' => $validated['name'],
            'phone' => $validated['phone'],
            'gender' => $validated['gender'],
            'location' => $validated['location'],

        ]);

        return redirect()->route('user.profile.edit', ['user' => $user->id])->with('successs', 'Your profile has been updatedc successfully.');
    }
    public function updateEmail(Request $request)
{
    $request->validate([
        'email' => 'required|email|unique:users,email',
    ]);

    $user = auth()->user();
    $user->email = $request->input('email');
    $user->email_verified_at = null;
    $user->save();

    $user->sendEmailVerificationNotification();

    return redirect()->route('user.profile.edit');
}
public function changePassword(Request $request)
{
    $user = auth()->user();

    $validated = $request->validate([
        'old_password' => 'required|min:6',
        'new_password' => 'required|min:6|confirmed',
    ]);

    if (!Hash::check($validated['old_password'], $user->password)) {
        return back()->withErrors(['old_password' => 'The old password is incorrect.']);
    }

    $user->password = Hash::make($validated['new_password']);

    if (!$user->save()) {
        return back()->with('errors', 'Something went wrong. Please try again later.');
    }

    return redirect()->back()->with('success1', 'Your password has been changed successfully.');
}

public function deleteAccount(Request $request)
{
    $user = auth()->user();

    if (!auth()->check()) {
        return back()->with('errors', ['login' => 'You must be logged in to delete your account.']);
    }



    if (!Hash::check($request->input('password'), $user->password)) {
        return back()->with('error2', ['password' => 'The password you entered is incorrect.']);
    }


    $user->delete();


    Auth::logout();


    return redirect()->route('home');
}


}
