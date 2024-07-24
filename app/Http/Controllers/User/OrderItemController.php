<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrderItem;
use App\Models\Order;

use App\Models\Product;
use Auth;
class OrderItemController extends Controller
{











    public function store(Request $request)
    {
        $orderItem = new OrderItem();
        $orderItem->order_id = $request->input('order_id');
        $orderItem->product_id = $request->input('product_id');
        $orderItem->quantity = $request->input('quantity');
        $orderItem->price = $request->input('price');
        $orderItem->save();

        return redirect()->route('order_items.index')->with('success', 'Order Item created successfully!');
    }

    public function show($id)
    {
        $orderItem = OrderItem::find($id);

        return view('order_items.show', compact('orderItem'));
    }

    public function edit($id)
    {
        $orderItem = OrderItem::find($id);

        return view('order_items.edit', compact('orderItem'));
    }

    public function update(Request $request, $id)
    {
        $orderItem = OrderItem::find($id);
        $orderItem->order_id = $request->input('order_id');
        $orderItem->product_id = $request->input('product_id');
        $orderItem->quantity = $request->input('quantity');
        $orderItem->price = $request->input('price');
        $orderItem->save();

        return redirect()->route('order_items.index')->with('success', 'Order Item updated successfully!');
    }

    public function destroy($id)
    {
        $orderItem = OrderItem::find($id);
        $orderItem->delete();

        return redirect()->route('order_items.index')->with('success', 'Order Item deleted successfully!');
    }
}
