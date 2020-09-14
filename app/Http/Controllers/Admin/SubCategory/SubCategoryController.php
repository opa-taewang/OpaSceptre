<?php

namespace App\Http\Controllers\Admin\SubCategory;

use Illuminate\Http\Request;
use App\Model\Admin\SubCategory;
use Alert;

use App\Http\Controllers\Controller;
use App\Model\Admin\Category;

class SubCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $subcategory = SubCategory::orderBy('category_id','ASC')->get();
        $category = Category::get();
        return view('admin.subcategory.view', compact('subcategory','category'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'subcategory_name' => ['required', 'min:3'],
            'category' => ['required', 'numeric']
        ]);
        SubCategory::create([
            'subcategory_name' => $request->input('subcategory_name'),
            'category_id' => $request->input('category')
        ]) ? toast('Added successfully', 'success'): '';
        return redirect()->route('admin.subcategory.show');
    }

    public function edit(SubCategory $subcategory)
    {
        $category = Category::get();
        return view('admin.subcategory.edit', compact('subcategory', 'category'));
    }

    public function update(Request $request, SubCategory $subcategory)
    {
        $data  = $request->validate([
            'subcategory_name' => ['required', 'min:3'],
            'category' => ['required', 'min:1', 'numeric']
        ]);
        if ($request->input('subcategory_name') === $subcategory->subcategory_name && $request->input('category') == $subcategory->category_id) {
            toast('There is nothing to update!', 'info');
        } else {
            $subcategory->update([
                'subcategory_name' => $request->input('subcategory_name'),
                'category_id' => $request->input('category')
            ]) ? toast('Updated Successfully!', 'success') : toast('Update failed!', 'failure');
        }
        return redirect()->route('admin.subcategory.show');
    }

    public function delete(Subcategory $subcategory)
    {
        $subcategory->delete($subcategory) ? toast('Deleted Successfully!', 'success') : '';
        return redirect()->route('admin.subcategory.show');
    }
}

