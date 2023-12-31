<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{

    
    public function showForm() {
        return view('cmdadd');
    }
    public function showUpdateForm($id) {
        $category = Category::findOrFail($id);
        return view('cmdupdate', compact('category'));
    }
    public function post(CategoryRequest $request) {
        $validated = $request->validated();
        $category = new Category();
        $category->name = $validated['name'];
        $category->save();
        return redirect('/');
    }
    public function update(CategoryRequest $request, $id) {
        $validated = $request->validated();
        $category = Category::findOrFail($id);
        $category->name = $validated['name'];
        $category->save();
        return redirect('/');
    }
    public function destroy($id) {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect('/');
    }
}
