<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seller;
use Auth;

class SellerProfileController extends Controller
{
    //
    public function setup() {

       $user = Auth::user();

    if (!$user) {
        return redirect()->route('seller.login');
    }

        else{
            return view('seller.setup');
        }


      }
      public function store(Request $request) {

        $validated = $request->validate([
          'shop_name' => 'required',
          'address' => 'required'
        ]);

        $seller = Seller::where('user_id', auth()->id())->first();

        if(!$seller) {
          // seller not found, create new entry
          $seller = Seller::create([
            'user_id' => auth()->id(),
            'shop_name' => $request->input('shop_name')
          ]);
        }

        $seller->update([
          'shop_name' => $validated['shop_name'],
          'address' => $validated['address']
        ]);

        return redirect()->route('user.profile');

      }
}
