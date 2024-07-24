<?php

namespace App\Http\Controllers\seller\direct;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Seller;
use Illuminate\Validation\Rule;
use App\Traits\imageProccessing;
use Storage;
use Str;
class SellerProductsController extends Controller
{
    use imageProccessing;
    public function index(Seller $seller)
    {
        $seller = Seller::find(auth()->id());
        $products = $seller->products()
        ->paginate(9999);


        return view('seller.sellerproducts.index', ['products' => $products]);
    }
    public function create() {


        $seller = Seller::find(auth()->id());

        $categories = Category::all();

        return view('seller.sellerproducts.create', [
          'categories' => $categories
        ]);

      }
      public function store(Request $request, Seller $seller)
      {
          $seller = Seller::find(auth()->id());

          // Validate the request data
          $request->validate([
              'name' => 'required|string|max:255',
              'description' => 'required|string',
              'price' => 'required|numeric',
              'image' => 'image',
              'quantity' => 'required|numeric',
              'category_id' => 'required|integer|exists:categories,id',
          ]);

          // Save the product data to the database
          $product = new Product();
          $product->name = $request->name;
          $product->description = $request->description;
          $product->price = $request->price;
          $product->quantity = $request->quantity;
          $product->seller_id = $seller->id;
          $product->category_id = $request->category_id;
          if ($request->hasFile('image')) {
              $dataX = $this->saveImageAndThumbnail($request->file('image'), true);
              $data['image'] = $dataX['image'];
              $data['thumbnailsm'] = $dataX['thumbnailsm'];
              $data['thumbnailmd'] = $dataX['thumbnailmd'];
              $data['thumbnailxl'] = $dataX['thumbnailxl'];
          }

          $seller->products()->save($product);

          return redirect()->route('seller.products.index')->with('success', 'Product created successfully!');
      }
    public function edit(Product $product,Seller $seller)
     {        $seller = Seller::find(auth()->id());

        if($product->seller_id != $seller->id) {
            abort(401);
          }
        $categories = Category::all();
        return view('seller.sellerproducts.edit',[ 'product' => $product, 'categories' => $categories ]);
     }
    public function update(Request $request, Product $product,Seller $seller)
    {        $seller = Seller::find(auth()->id());


            if($product->seller_id != $seller->id) {
                abort(401);
            }
        $request->validate([
         'name' => 'required',
         'description' => 'required',
         'image' => 'image',
         'price' => 'numeric',
         'quantity'      =>  'required|numeric',
         ]);
         if($request->hasFile('image')) {

            $this->deleteImage($product->image);

            $imageData = $this->saveImageAndThumbnail($request->file('image'));

            $product->image = $imageData['image'];

            // etc

          }
          $product->update($request->all());
          return redirect()->route('seller.products.index');
    }
    public function destroy($id)
     {
        $product = Product::find($id);

         if($product->seller_id != auth()->id()) {
        abort(401);
     }
     if (!$product) {
        return redirect()->back();
    }
         $product->delete();
         return redirect()->route('seller.products.index');
     }


        }
