<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\Product;
use App\Models\Cart;
use Auth;
use Session;
class CartItemController extends Controller
{
    public function index()
    {
        $cartItems = CartItem::where('user_id', Auth::user()->id)->get();
        $productsprice = 0;
        $total=0;
        $fee=3;
        foreach ($cartItems as $cartItem) {
            $productsprice += $cartItem->quantity * $cartItem->product->price;
        }
        $total=$productsprice+$fee;
        $productCount = $cartItems->count();
        return view('cart.cartitemshow',
        ['cartItems'              =>    $cartItems,
         'productsprice'          =>    $productsprice,
         'fee'                    =>    $fee,
         'productCount'           =>    $productCount,
         'total'                  =>    $total
        ]);
    }

    public function store(Request $request)
    {
        $cartItem = new CartItem();
    $cartItem->user_id = Auth::user()->id;

    $cartItem->product_id = $request->input('product_id');
    $product=Product::find(  $cartItem->product_id);
    $cartItem->quantity = $request->input('quantity');
    if ($cartItem->quantity > $product->quantity) {
        Session::flash('danger', 'Out of stock');

        return redirect()->back();
    }

    $cartItem->save();
    return redirect()->back();
}


    public function update(Request $request, $id)
    {
        $cartItem = CartItem::find($id);
        $cartItem->quantity = $request->input('quantity');
        $cartItem->save();

        return redirect()->route('cart.items.index');
    }

    public function destroy($id)
    {
        $cartItem = CartItem::find($id);
        $cartItem->delete();

        return redirect()->route('cart.items.index');
    }
}
