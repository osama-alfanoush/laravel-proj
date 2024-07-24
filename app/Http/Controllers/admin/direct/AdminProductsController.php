<?php

namespace App\Http\Controllers\admin\direct;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;


use Illuminate\Support\Facades\Validator;

class AdminProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $products = Product::all();
        return view('admin.adminproducts.index', ['products' => $products]);
    }
    public function create()
    {
        $categories = Category::all();
        return view('admin.adminproducts.create', ['categories' => $categories]);
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
         'quantity'      =>  'required|numeric',
            'price' => 'required|numeric',
            'image' => 'required|image',
            'category_id' => 'required|exists:categories,id',
        ]);
        $category = Category::find($validatedData['category_id']);
        if (!$category) {

            return redirect()->back()->withErrors(['category_id' => 'The selected category does not exist.']);
        }
        $imagePath = $request->file('image')->store('product_images', 'public');

        $product = new Product();
        $product->name = $validatedData['name'];
        $product->description = $validatedData['description'];
        $product->price = $validatedData['price'];
        $product->quantity = $validatedData['quantity'];

        $product->image = $imagePath;
        $product->category_id = $validatedData['category_id'];
        $product->save();
        return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
    }
    public function edit(Product $product)
    {
        $categories = Category::where('id', $product->category_id)->get();
          return view('admin.adminproducts.edit', compact('product', 'categories'));
    }
    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
         'quantity'      =>  'required|numeric',

            'price' => 'required|numeric',
            'image' => 'nullable|image',
            'category_id' => 'required|exists:categories,id',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $product->image = $imagePath;
        }

        $product->name = $validatedData['name'];
        $product->description = $validatedData['description'];
        $product->price = $validatedData['price'];
        $product->quantity = $validatedData['quantity'];

        $product->category_id = $validatedData['category_id'];
        $product->save();

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully.');
    }
    public function destroy(Product $product)
{
    $product->delete();
    return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully.');
}
}
