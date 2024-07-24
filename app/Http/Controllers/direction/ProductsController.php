<?php

namespace App\Http\Controllers\direction;

use App\Http\Controllers\Controller;
use App\Traits\imageProccessing;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Review;
use App\Models\Seller;
use App\Models\Admin;
use App\Models\Category;
use App\Models\CartItem;
use Auth;
use App\Models\Image;
class ProductsController extends Controller
{
    use imageProccessing;
  public function index()

    {
        $products = Product::orderBy("id","desc")->paginate(10);
        $categories = Category::all();
        return view('products.index', ['products' => $products,    'categories' => $categories]);}

        /*$admin = Auth::guard('admin')->user();
        if ($admin) {

            $adminId = $admin->id;

        $products = $admin
        ->products()
        ->paginate(9999);

        return view('products.index', ['products' => $products]);
    }
       elseif ($seller = Seller::find(auth()->id())){
        $products = $seller->products()
        ->paginate(9999);
        return view('seller.sellerproducts.index', ['products' => $products,    'categories' => $categories]);}
        else{
            abort(403);
        }*/


    public function create()
    {     $admin = Auth::guard('admin')->user();
        if ($admin) {

            $adminId = $admin->id;
        $categories = Category::all();
        return view('products.create', [
            'categories' => $categories
          ]);}
          elseif(    $seller = Seller::find(auth()->id())){
            $categories = Category::all();
            return view('seller.sellerproducts.create', [
                'categories' => $categories
              ]);}
              else{
            abort(403);

              }
    }

    public function store(Request $request)
    {
        $admin = Auth::guard('admin')->user();
        if ($admin) {

             $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'required|string',
                'price' => 'required|numeric',
                'image' => 'image',
                'quantity' => 'required|numeric',
                'category_id' => 'required|integer|exists:categories,id',
            ]);
            $requestData = $request->all();
            $filename = time() . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('images/products', $filename, 'localimage');
            $requestData['image'] = $path;

            Product::create($requestData);


        return redirect()->route('products.index')->with('success', 'Product created successfully!');
        }
        elseif(    $seller = Seller::find(auth()->id())){
            $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'required|string',
                'price' => 'required|numeric',
                'image' => 'image',
                'quantity' => 'required|numeric',
                'category_id' => 'required|integer|exists:categories,id',
            ]);
            $requestData = $request->all();
            $filename = time() . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('images/products', $filename, 'localimage');
            $requestData['image'] = $path;

            Product::create($requestData);


        return redirect()->route('products.index')->with('success', 'Product created successfully!');
        }
     else{
        abort(403);
        }


    }

    public function show($id)
    {
        $product = Product::find($id);
        $cartItems = CartItem::where('user_id', Auth::user()->id)->get();
        $productCount = $cartItems->count();

       return view('products.show', ['product' => $product, 'productCount'           =>      $productCount]);
    }


    public function edit(Product $products)
    {
    $categories = Category::all();
    $admin = Auth::guard('admin')->user();

    if ($admin || $seller = Seller::find(auth()->id())) {
        $product = $products;
        if ($admin) {
            return view('products.edit', ['product' => $product,'categories' => $categories]);
        } else {
            return view('seller.sellerproducts.edit', ['product' => $product,'categories' => $categories]);

        }
    } else {
        abort(403);
    }
}



public function update(Request $request, Product $product)
{
    $admin = Auth::guard('admin')->user();
    if ($admin || $seller = Seller::find(auth()->id())) {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'image',
            'quantity' => 'required|numeric',
            'category_id' => 'required|integer|exists:categories,id',
        ]);

        $requestData = $request->all();
        $filename = time() . $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images/products', $filename, 'localimage');
        $requestData['image'] = $path;
        $product->update($requestData);

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    } else {
        abort(403);
    }
}
    public function destroy($id)
    {
        $product = Product::find($id);
        $admin = Auth::guard('admin')->user();

if ($product->seller_id === auth()->id() || Admin::find(auth()->id())) {

    $product->delete();
    return redirect()->route('products.index')->with('success', 'Product deleted successfully!');

} else {
    abort(403);

}
    }




        public function rate(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'rating' => 'required|integer|between:1,5',
            'product_id' => 'required|exists:products,id',
        ]);
        $review = new Review();
        $review->user_id = Auth::user()->id;
        $review->product_id = $validatedData['product_id'];
        $review->rating = $validatedData['rating'];
        $review->save();

        return redirect()->back();
    }
public function popularProducts()
{
    $products = Product::orderBy('rating', 'desc')->limit(10)->get();
    return view('pages.popular-products', ['products' => $products]);
}
public function searchProducts(Request $request)
{
    $query = $request->input('query');
    $products = Product::where('name', 'like', '%'.$query.'%')->get();
    return view('pages.search-products', ['products' => $products]);
}
public function shopProducts($sellerId){
    $products = Product::where('seller_id', $sellerId)->get();
    $cartItems = CartItem::where('user_id', Auth::user()->id)->get();
    $productCount = $cartItems->count();
    $counter=0;
    return view('seller.sellerproducts.prod',['products' => $products,
    'productCount'           =>      $productCount,
    'counter'           =>      $counter


]);
}
public function showProductsInCategory($categoryId)
{
    $products = Product::where('category_id', $categoryId)->get();
    $cate = Category::find($categoryId);
    $cartItems = CartItem::where('user_id', Auth::user()->id)->get();
    $productCount = $cartItems->count();
    $counter=0;

    return view('products.category', ['products' => $products,
    'productCount'           =>      $productCount,
    'counter'           =>      $counter,
    'cate' => $cate

]);
}
}
