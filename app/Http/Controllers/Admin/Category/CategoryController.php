<?php

namespace App\Http\Controllers\Admin\Category;

use Illuminate\Http\Request;
use App\Model\Admin\Category;
use App\Http\Controllers\Controller;
use Alert;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $category = Category::get();
        return view('admin.category.view', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $data  = $request->validate([
            'category_name' => ['required', 'min:3']
        ]);
        if($request->input('category_name') === $category->category_name){
            toast('There is nothing to update!', 'info');
        }else{
            $category->update($data) ? toast('Updated Successfully!', 'success') : toast('Update failed!', 'failure');
        }
        return redirect()->route('admin.category.show');
    }

    public function create(Request $request)
    {
        $data  = $request->validate([
            'category_name' => ['required', 'min:3']
        ]);
        Category::create($data) ? toast('Added Successfully!', 'success'): '';
        return redirect()->route('admin.category.show');
    }

    public function delete(Category $category)
    {
        $category->delete($category) ? toast('Deleted Successfully!', 'success') : '';
        return redirect()->route('admin.category.show');
    }
}
