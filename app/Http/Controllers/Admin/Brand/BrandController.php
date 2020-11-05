<?php

namespace App\Http\Controllers\Admin\Brand;

use Cloudinary;
use App\Model\Admin\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        $brand_logo = $request->file('brand_logo')->getRealPath();
        $brand_logo = Cloudinary\Uploader::upload($brand_logo, array(
            "width" => 140,
            "height" => 60,
            "crop" => "pad",
            "use_filename" => true,
            "folder" => "brands/"
        ));
        Brand::create([
            'brand_name' => $request->input('brand_name'),
            'brand_logo' => $brand_logo['public_id']
        ]) ? toastr('Brand added successfully') : '';
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
            toastr('There is nothing to update!', 'info');
        } else {
            // Update brand logo
            if(request('brand_logo')){
                $ch = curl_init('https://res.cloudinary.com/opasceptre/image/upload/v1600627348/' . $brand->brand_logo);
                curl_exec($ch);
                curl_getinfo($ch, CURLINFO_HTTP_CODE) == 200 ? Cloudinary\Uploader::destroy($brand->brand_logo) : '';
                $brand_logo = $request->file('brand_logo')->getRealPath();
                $brand_logo = Cloudinary\Uploader::upload($brand_logo, array(
                    "width" => 140,
                    "height" => 60,
                    "crop" => "pad",
                    "use_filename" => false,
                    "folder" => "brands/"));
                $brand->update(['brand_logo' => $brand_logo['public_id']]) ? toastr('Updated Successfully!', 'success') : toastr('Update failed!', 'failure');
            }
            // Update brand name
            $brand->update(['brand_name' => $request->input('brand_name')]) ? toastr('Updated Successfully!', 'success') : toastr('Update failed!', 'failure');
            return redirect()->route('admin.brand.show');
        }
        return redirect()->route('admin.brand.show');
    }

    public function delete(Brand $brand)
    {
        $ch = curl_init('https://res.cloudinary.com/opasceptre/image/upload/v1600627348/'.$brand->brand_logo);
            curl_exec($ch);
            curl_getinfo($ch, CURLINFO_HTTP_CODE) == 200 ? Cloudinary\Uploader::destroy($brand->brand_logo) : '';
        $brand->delete($brand) ? toastr('Deleted Successfully!', 'success') : '';
        return redirect()->route('admin.brand.show');
    }
}
