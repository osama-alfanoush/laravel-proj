<?php

namespace App\Http\Controllers\direction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrderRequest;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;


class OrderRequestController extends Controller
{
    public function index()
    {
        $orderRequets = OrderRequest::all();
        $userId = Auth::user()->id;

        $orders = Order::where('user_id', $userId)->get();

        $orderItems = OrderItem::whereIn('order_id', $orders->pluck('id'))->get();

        // Get the product IDs from the order items.
        $productIds = $orderItems->pluck('product_id');

        // Save the order_id, user_id, and product_id in the order_request table.
        foreach ($orderItems as $orderItem) {
            $orderRequest = new OrderRequest();
            $orderRequest->order_id = $orderItem->order->id;
            $orderRequest->user_id = $userId;
            $orderRequest->product_id = $orderItem->product->id;

            $orderRequest->save();
        }

        $orderRequests = OrderRequest::where('user_id', $userId)->get();

        return view('orders.index', compact('orderRequests'));
    }

    public function storeOrderRequest(Request $request)
    {
        $orderRequest = new OrderRequest();
        $orderRequest->order_id = $request->input('order_id');
        $orderRequest->user_id = $request->input('user_id');
        $orderRequest->product_id = $request->input('product_id');
        $orderRequest->seller_id = $request->input('seller_id');
        $orderRequest->admin_id = $request->input('admin_id');

        $orderRequest->save();

        return response()->json([
            'success' => true,
            'message' => 'Order request saved successfully!',
        ], 201);
    }


    public function show(OrderRequest $orderRequest)
    {
        return view('category_requests.show', compact('OrderRequest'));
    }

    public function edit(OrderRequest $orderRequest)
    {
        return view('category_requests.edit', compact('OrderRequest'));
    }

    public function update(Request $request, OrderRequest $orderRequest)
    {
        $orderRequest->user_id = $request->user()->id;
        $orderRequest->product_id = $request->input('product_id');
        $orderRequest->seller_id = $request->input('seller_id');
        $orderRequest->admin_id = $request->input('admin_id');
        $orderRequest->save();

        return redirect()->route('category_requests.index')->with('success', 'Category request updated successfully!');
    }

    public function destroy(OrderRequest $orderRequest)
    {
        $orderRequest->delete();

        return redirect()->route('category_requests.index')->with('success', 'Category request deleted successfully!');
    }
}
