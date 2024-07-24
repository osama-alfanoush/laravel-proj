<?php

namespace App\Http\Controllers\admin\direct;
use App\Traits\imageProccessing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\CategoryRequest;
use Auth;
use App\Models\Product;
class AdminCategoriesController extends Controller
{
    use imageProccessing;

    public function __construct()
    {
      $this->middleware('auth:admin');
    }
    public function indexReq()
    {
        $categoryRequests = CategoryRequest::all();
        $categoryRequests = CategoryRequest::where('status', 'pending')->get();

        return view('admin.categories_request.index', ['categoryRequests' => $categoryRequests]);
    }

    public function approve($id)
{
    $categoryRequest = CategoryRequest::find($id);

    if ($categoryRequest->status === 'pending') {
        $categoryRequest->status = 'approved';
        $categoryRequest->save();

        $category = new Category();
        $category->name = $categoryRequest->name;
        $category->admin_id = auth()->id();
        $category->save();
    }

    return redirect()->route('admin.category_requests.index')->with('success', 'Category request approved successfully.');
}

    public function cancel($id)
    {
        $categoryRequest = CategoryRequest::find($id);

        if ($categoryRequest->status === 'pending') {
            $categoryRequest->status = 'cancelled';
            $categoryRequest->save();
        }

        return redirect()->route('admin.category_requests.index')->with('success', 'Category request cancelled successfully.');
    }




        public function index(Request $request)
        {
            $categories = Category::all();
            $categoryRequests = CategoryRequest::all();

            return view('admin/categories/index', ['categories' => $categories, 'categoryRequests' => $categoryRequests]);
        }
    public function create()
    {
      return view('admin/categories/create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'image',
        ]);if ($request->validator->fails()) {
            return redirect()->route('categories.create')->withErrors($request->validator);
        }
        $requestData = $request->all();
        $filename = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images/category', $filename, 'catimage');
        $requestData['image'] = $path;

        dd($requestData);

        Category::create($requestData);

        return redirect()->route('categories.index');
    }

    public function edit($id)
    {

     $category = Category::find($id);

        return view('admin/categories/.edit', compact('category'));
    }

    public function update(Request $request, Category $category,$id)
    {        $category = Category::find($id);
        $validatedData = $request->validate([
            'name' => 'required|string',
        ]);
        $category->id=$request->id;
        $category->admin_id = auth()->id();
        $category->name = $validatedData['name'];
        $category->save();

        return redirect()->route('categories.index')
            ->with('success', 'Category updated successfully!');
    }

        public function destroy($id)
        {
            $category = Category::find($id);
            if($category->admin_id != Auth::guard('admin')->user()->id) {
                abort(403);
              }

            if (!$category) {
                return redirect()->back();
            }

            $category->delete();

            return redirect()->route("categories.index");
        }
        public function show($id)
        {
            $category = Category::find($id);

            if (!$category) {
                return redirect()->back();
            }

            return view('admin.categories.show', [
                'category' => $category,
            ]);
        }
        public function search(Request $request)
{
    $query = Category::query();

    if ($request->has('search')) {
        $query->where('name', 'like', "%{$request->search}%")
            ->orWhere('description', 'like', "%{$request->search}%");
    }

    $categories = $query->paginate(10);

    return view('admin/categories/.index', ['categories' => $categories]);
}


    }

