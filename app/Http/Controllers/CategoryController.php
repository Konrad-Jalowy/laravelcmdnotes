<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{

    public function show() {
        return "not implemented";
    }
    public function detail() {
        return "not implemented";
    }
    public function showForm() {
        return view('cmdadd');
    }
    public function showUpdateForm() {
        return "not implemented";
    }
    public function post(CategoryRequest $request) {
        $validated = $request->validated();
        $category = new Category();
        $category->name = $validated['name'];
        $category->save();
        return redirect('/');
    }
    public function update() {
        return "not implemented";
    }
    public function destroy($id) {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect('/');
    }
}
