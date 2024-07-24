<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\admin\direct\AdminCategoriesController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Seller;
use Spatie\Permission\Models\Role;
use App\Models\Category;
use App\Models\CategoryRequest;

class SellerController extends Controller
{

    public function index(){
        $seller = auth()->user();
        $categories = Category::all();
        if (!$seller->hasOrders()) {
            return view('seller.home', ['message' => 'You do not have any orders yet.']);
        }
        $pendingOrders = $seller->orders()->where('status', 'pending')->get();
        return view('seller.home', ['categories' => $categories]);
    }
    public function reqindex(){
        return view('seller.categories.request');
    }



    public function requestCategory(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string'
        ]);
        $categoryRequest = new CategoryRequest();
        $categoryRequest->seller_id = auth()->user()->id;
        $categoryRequest->name = $request->input('name');
        $categoryRequest->status = 'pending';
        $categoryRequest->save();

        return redirect()->back()->with('success', 'Category request submitted successfully.');
    }
}

