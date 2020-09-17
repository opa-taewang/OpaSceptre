<?php

namespace App\Http\Controllers\Admin\Brand;

use App\Http\Controllers\Controller;
use App\Model\Admin\Brand;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class BrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index(){
        $brand = Brand::get();
        return view('admin.brand.view', compact('brand'));
    }

     public function create(Request $request)
    {
        $data = $request->validate([
            'brand_name' => ['required', 'min:3', 'alpha', 'unique:brands'],
            'brand_logo' => ['required', 'min:3', 'image']
        ]);
        $brand_logo = request('brand_logo')->store('brand', 'public');
        Image::make(public_path("storage/{$brand_logo}"))->resize(140, 60)->save();
        Brand::create([
            'brand_name' => $request->input('brand_name'),
            'brand_logo' => $brand_logo
        ]) ? toast('Brand added successfully') : '';
        return redirect()->route('admin.brand.show');
    }

    public function edit(Brand $brand)
    {
        return view('admin.brand.edit', compact('brand'));
    }

    public function update(Request $request, Brand $brand)
    {
        $data  = $request->validate([
            'brand_name' => ['required', 'min:3', 'alpha'],
            'brand_logo' => ['image', 'nullable']
        ]);
        if ($request->input('brand_name') === $brand->brand_name && !request('brand_logo')) {
            toast('There is nothing to update!', 'info');
        } else {
            // Update brand logo
            if(request('brand_logo')){
                $image = 'storage/' . $brand->brand_logo;
                unlink($image);
                $brand_logo = request('brand_logo')->store('brand', 'public');
                Image::make(public_path("storage/{$brand_logo}"))->resize(140, 60)->save();
                $brand->update(['brand_logo' => $brand_logo]) ? toast('Updated Successfully!', 'success') : toast('Update failed!', 'failure');
            }
            // Update brand name
            $brand->update(['brand_name' => $request->input('brand_name')]) ? toast('Updated Successfully!', 'success') : toast('Update failed!', 'failure');
            return redirect()->route('admin.brand.show');
        }
        return redirect()->route('admin.brand.show');
    }

    public function delete(Brand $brand)
    {
        $image = 'storage/'.$brand->brand_logo;
        unlink($image);
        $brand->delete($brand) ? toast('Deleted Successfully!', 'success') : '';
        return redirect()->route('admin.brand.show');
    }
}
