<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('admin.categories.index',['categories' => $categories]);
    }

    public function create(){

        return view('admin.categories.create');

    }

    public function store(Request $request, Category $category){

        $formFields = $request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);

        $category->create($formFields);

        return redirect()->route('categories.index')->with('success', 'Category has been created ');
    }

    public function edit(Category $category){
        
        return view('admin.categories.edit',['category'=> $category]);
    }

    public function update(Request $request, Category $category){

        $formFields = $request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);

        $category->update($formFields);
        
        return redirect()->route('categories.index')->with('success', 'Category has been updated ');
    }

    public function destroy(Category $category){
        
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category has been deleted ');

    }

}
