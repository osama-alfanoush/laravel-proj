<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\CartItem;
use App\Models\OrderItem;
use App\Models\OrderRequest;
use App\Models\Product;
use App\Models\Admin;
use App\Models\Seller;
use Illuminate\Support\Facades\Auth;




class OrderController extends Controller
{
    public function addOrder(Request $request)
    {


        $user = $request->user();
        $cartItems = CartItem::where('user_id', $user->id)->get();

        // Create a new order record
        $order = new Order();
        $total = 0;
        $fee=3;
        foreach ($cartItems as $cartItem) {
            $total += $cartItem->quantity * $cartItem->product->price;
            $order->user_id = $user->id;
            $order->status = 'pending';
            $order->product_id = $cartItem->product->id;

        }



        $order->total_amount = $total+$fee;
        $order->save();


        if (!is_null($request->input('order_items'))) {
            $orderItems = $request->input('order_items');
        }
        // Iterate over the cart items and add each item to the order
        foreach ($cartItems as $cartItem) {
            $orderItem = new OrderItem();
            $orderItem->order_id = $order->id;
            $orderItem->product_id = $cartItem->product_id;
            $orderItem->quantity = $cartItem->quantity;
            $orderItem->price = $cartItem->product->price;
            $orderItem->save();


        } foreach ($cartItems as $cartItem) {
        $product = Product::find($cartItem->product_id);

        $orderRequest = new OrderRequest();
        $orderRequest->user_id = auth()->user()->id;
        $orderRequest->order_id = $order->id;
        $orderRequest->product_id=$cartItem->product_id;

                    if ($product->seller_id) {
                        $sellerId=$product->seller_id;
            $orderRequest->seller_id = $sellerId;


        }
            elseif ($product->admin_id) {
            $adminId=$product->admin_id;
            $orderRequest->admin_id = $adminId;
            } else {
    abort(404);
            }


    $orderRequest->save();}
        $order->save();

        // Clear the user's cart
        $cartItems->each(function($cartItem) {
            $cartItem->delete();
        });

        // Start the order
        $order->start();
        return redirect()->route('cart.items.index')->with('success', 'Order placed successfully!');

//        return redirect()->route('orders.index')->with('success', 'Order placed successfully!');

    }
/*     $user = $request->user();
        $cartItems = CartItem::where('user_id', $user->id)->get();
        // Create a new order record
        $order = new Order();
        $total = 0;
        $fee=3;
        foreach ($cartItems as $cartItem) {
            $total += $cartItem->quantity * $cartItem->product->price;
        }

        $order->user_id = $user->id;
        $order->status = 'pending';
        $order->total_amount = $total+$fee;
        $order->save();

        // Iterate over the cart items and add each item to the order
        foreach ($cartItems as $cartItem) {
            $orderItem = new OrderItem();
            $orderItem->order_id = $order->id;
            $orderItem->product_id = $cartItem->product_id;
            $orderItem->quantity = $cartItem->quantity;
            $orderItem->price = $cartItem->product->price;
            $orderItem->save();


        }

        // Save the order
        $order->save();

        // Clear the user's cart
        $cartItems->each(function($cartItem) {
            $cartItem->delete();
        });

        // Start the order
        $order->start();

        return redirect()->route('orders.index')->with('success', 'Order placed successfully!');* */

    public function cancelOrder($orderId)
    {
        $order = Order::find($orderId);

        if (!$order) {
            return redirect()->back()->with('error', 'Order not found!');
        }

        if ($order->status != 'pending') {
            return redirect()->back()->with('error', 'Order cannot be cancelled!');
        }

        $order->status = 'cancelled';
        $order->save();

        return redirect()->route('orders.index')->with('success', 'Order cancelled successfully!');
    }

    public function approveOrder($orderId)
    {
        $order = Order::find($orderId);

        if (!$order) {
            return redirect()->back()->with('error', 'Order not found!');
        }

        if ($order->status != 'pending') {
            return redirect()->back()->with('error', 'Order cannot be approved!');
        }

        $order->status = 'approved';
        $order->save();

        return redirect()->route('orders.index')->with('success', 'Order approved successfully!');
    }

   public function listOrders(Request $request)
    {            $userId = Auth::user()->id;

        $orders = Order::where('user_id', $userId)->get();

        $orderItems = OrderItem::whereIn('order_id', $orders->pluck('id'))->get();
        $cartItems = CartItem::where('user_id', Auth::user()->id)->get();
        $productCount = $cartItems->count();


        return view('orders.index',[   'productCount'           =>      $productCount,
        'orderItems'=> $orderItems,'userId'=> $userId]);
    }

    public function getOrderDetailes(Request $request){
        $admin = Auth::guard('admin')->user();

        if ($admin) {
            $adminID = $admin->id;
            $orderRequests=OrderRequest::where('admin_id',$adminID)->get();
            foreach ($orderRequests as $orderRequest)
            $orderItems=[]; {
                $products=Product::find($orderRequest->product->id);
            $orderItems=OrderItem::where('product_id',$orderRequest->product_id)->get();}

            return view('orders.orderdirect', [
                'orderRequests'=>$orderRequests,
                'orderItems'=>$orderItems

            ]);}
            elseif(    $seller = Seller::find(auth()->id())){
                $orderRequests = OrderRequest::whereHas('seller', function ($query) use ($seller) {
                    $query->where('id', $seller->id);
                  })->with('product')->get();
            foreach ($orderRequests as $orderRequest) {
                $products=Product::find($orderRequest->product->id);
                $orderItems=OrderItem::where('product_id',$orderRequest->product_id)->get();}

            return view('orders.orderdirect', [
                'orderRequests'=>$orderRequests,
                'orderItems'=>$orderItems
            ]);}


    }



}



