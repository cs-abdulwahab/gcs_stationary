<?php

namespace App\Http\Controllers;

use App\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
  public function index()
  {
    $categories = Category::with('children')->whereNull('parent_id')->get();

    return view('categories.index')->with([
      'categories'  => $categories
    ]);
  }
  public function store(Request $request)
  {
    $validatedData = $this->validate($request, [
      'name'      => 'required|min:3|max:255|string',
      'parent_id' => 'sometimes|nullable|numeric'
    ]);

    Category::create($validatedData);

    return redirect()->route('category.index')->withSuccess('You have successfully created a Category!');
  }
  public function update(Request $request, Category $category)
  {
    $validatedData = $this->validate($request, [
      'name'  => 'required|min:3|max:255|string'
    ]);

    $category->update($validatedData);

    return redirect()->route('category.index')->withSuccess('You have successfully updated a Category!');
  }
  public function destroy(Category $category)
  {
    if ($category->children) {
      foreach ($category->children()->with('products')->get() as $child) {
        foreach ($child->products as $post) {
          $post->update(['category_id' => NULL]);
        }
      }

      $category->children()->delete();
    }

    foreach ($category->products as $post) {
      $post->update(['category_id' => NULL]);
    }

    $category->delete();

    return redirect()->route('category.index')->withSuccess('You have successfully deleted a Category!');
  }
}
