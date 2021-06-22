<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\Category;
use App\Admin\Developer;
use Session;

class CategoryController extends Controller
{
    public function category()
    {
        $category = Category::get();
        Session::flash('page', 'category');
        return view('admin.category.category', compact('category'));
    }

    public function add(Request $request)
    {
        $data = $request->all();
        $category = new Category;
        $category->category= $data['category'];
        $category->icon= $data['icon'];
        $category->save();
        return redirect()->back()->with('success_message', 'Category has added successfully!');

    }

    public function edit(Request $request, $id)
    {
        $data = $request->all();
        $category = Category::find($id);
        $category->category= $data['category'];
        $category->icon= $data['icon'];
        $category->save();
        return redirect()->back()->with('success_message', 'Category has updated successfully!');
    }

    public function delete($id)
    {
         Category::where('id',$id)->delete();
        return redirect()->back()->with('success_message','Category has beeb deleted successfully');
    }
}
