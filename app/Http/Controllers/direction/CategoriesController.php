<?php

namespace App\Http\Controllers\direction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
class CategoriesController extends Controller
{
    //



      public function index()
      {
          $categories = Category::paginate(10);
          $data = [
              'categories' => $categories
          ];
          return view('categories.index', $data);
      }

      public function create()
      {
          return view('categories.create');
      }

      public function store(Request $request)
      {
        $request->validate([
          'name' => 'required|string',
          'description' => 'required|string'
        ]);

        Category::create($request->only(['name','description']));

        return redirect()->route('categories.index');
      }

      public function edit(Category $category)
      {
        return view('categories.edit', compact('category'));
      }

      public function update(Request $request, Category $category)
      {
        $request->validate([
          'name' => 'required|string',
          'description' => 'required|string'
        ]);

        $category->update($request->only(['name','description']));

        return redirect()->route('categories.index');
      }

      public function destroy($id)
      {
          $category = Category::find($id);
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
          $data = [
              'category' => $category
          ];
          return view("categories.show", $data);
      }
}
