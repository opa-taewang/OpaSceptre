<?php

namespace App\Http\Controllers\Admin\Product;

use App\Model\Admin\Brand;
use App\Model\Admin\Product;
use App\Model\Admin\ImageModel;
use Illuminate\Http\Request;
use App\Model\Admin\Category;
use App\Model\Admin\SubCategory;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\ImageModel as AppImageModel;

class ProductController extends Controller
{
    private function array_replace_keys($array, $keys)
    {
        foreach ($keys as $search => $replace) {
            if (isset($array[$search])) {
                $array[$replace] = $array[$search];
                unset($array[$search]);
            }
        }

        return $array;
    }

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $product = DB::table('products')
                    ->join('categories', 'categories.id', '=', 'products.category_id')
                    ->join('brands', 'brands.id', '=', 'products.brand_id')
                    ->select('products.id', 'products.product_name', 'products.image_one', 'products.product_quantity', 'products.status', 'categories.category_name', 'brands.brand_name')
                    ->orderBy('products.created_at', 'desc')
                    ->get();
        return view('admin.product.all', compact('product'));
    }

    public function create()
    {
        $category = Category::get();
        $brand = Brand::get();
        return view('admin.product.add', compact('category', 'brand'));
    }

    // Get SubCategory
    public function getSubCategory(Category $category)
    {
        $subcategory = Category::find($category->id)->subcategories()->get();
        return view('admin.ajax.subcategory', compact('subcategory'))->render();
    }

    public function store(Request $request)
    {
       $data = $request->validate([
            'product_name' => ['required'],
            'product_code' => ['required', 'unique:products', 'numeric'],
            'product_quantity' => ['required', 'numeric'],
            'product_category' => ['required', 'numeric'],
            'product_subcategory' => ['nullable', 'numeric'],
            'product_brand' => ['required', 'numeric'],
            'product_size' => ['required'],
            'product_colour' => ['required'],
            'selling_price' => ['required', 'numeric'],
            'discount_price' => ['nullable', 'numeric', 'lt:selling_price'],
            'product_details' => ['required'],
            'image_one' => ['nullable', 'image'],
            'image_two' => ['nullable', 'image'],
            'image_three' => ['nullable', 'image'],
            'image_four' => ['nullable', 'image'],
            'video_link' => ['nullable', 'url'],
            'main_slider' => ['boolean'],
            'hot_deal' => ['boolean'],
            'best_rated' => ['boolean'],
            'trend_product' => ['boolean'],
            'mid_slider' => ['boolean'],
            'hot_new' => ['boolean'],
        ]);
        $data['status'] = 1;
        $data = $this->array_replace_keys($data, [
            'trend_product' => 'trend',
            'product_category'=> 'category_id',
            'product_subcategory'=> 'subcategory_id',
            'product_brand'=> 'brand_id']);
        $uploads = ['image_one', 'image_two', 'image_three', 'image_four'];
        $data = AppImageModel::ImageUpload($data, $uploads, 'products');
        Product::create($data) ? toast('Producct added successfully') : '';
        return redirect()->route('admin.product.index');
    }

    public function edit(Product $product)
    {
        $category = Category::get();
        $subcategory = Category::find($product->category_id)->subcategories()->get(['id', 'subcategory_name']);
        $brand = Brand::get();
        return view('admin.product.edit', compact('product', 'category', 'subcategory', 'brand'));
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'product_name' => ['required'],
            'product_quantity' => ['required', 'numeric'],
            'product_category' => ['required', 'numeric'],
            'product_subcategory' => ['nullable', 'numeric'],
            'product_brand' => ['required', 'numeric'],
            'product_size' => ['required'],
            'product_colour' => ['required'],
            'selling_price' => ['required', 'numeric'],
            'discount_price' => ['nullable', 'numeric', 'lt:selling_price'],
            'product_details' => ['required'],
            'video_link' => ['nullable', 'url'],
            'main_slider' => ['boolean'],
            'hot_deal' => ['boolean'],
            'best_rated' => ['boolean'],
            'trend_product' => ['boolean'],
            'mid_slider' => ['boolean'],
            'hot_new' => ['boolean'],
        ]);

        $data = Product::checkCheckBox($request, $data, [
                    'main_slider',
                    'hot_deal',
                    'best_rated',
                    'trend_product',
                    'mid_slider',
                    'hot_new',]);
        // Replace array keys
        $data = $this->array_replace_keys($data, [
            'trend_product' => 'trend',
            'product_category' => 'category_id',
            'product_subcategory' => 'subcategory_id',
            'product_brand' => 'brand_id'
        ]);
        // Update product details
        $product->update($data) ? toast('Updated Successfully!', 'success') : toast('Update failed!', 'failure');
        return redirect()->route('admin.product.show', $product);
    }

    // Update product Image
    public function updateImage(Request $request, Product $product)
    {
        $request->validate([
            'image_one' => ['nullable', 'image'],
            'image_two' => ['nullable', 'image'],
            'image_three' => ['nullable', 'image'],
            'image_four' => ['nullable', 'image'],
        ]);
        $data = [];
        $uploads = [
            'image_one' => $product->image_one,
            'image_two' => $product->image_two,
            'image_three' => $product->image_three,
            'image_four' => $product->image_four,
        ];
        $data = AppImageModel::ImageUpdate($data, $uploads, 'products');

        // Update product images
        if(empty($data))
        {
            toast('Nothing to Update!', 'warning');
        }else{
            $product->update($data) ? toast('Updated Successfully!', 'success') : toast('Update failed!', 'failure');
        }
        return redirect()->route('admin.product.show', $product);
    }

    // Show individual product
    public function show(Product $product)
    {
        $category = $product->category->category_name;
        $subcategory = $product->subcategory->subcategory_name;
        $brand = $product->brand->brand_name;
        $colour = explode(',', $product->product_colour);
        $size = explode(',', $product->product_size);
        return view('admin.product.view', compact('product', 'category', 'subcategory', 'brand', 'size', 'colour'));
    }
    // Delete indiviodual products
    public function delete(Product $product)
    {
        // Delete product images
        $uploads = [
            'image_one' => $product->image_one,
            'image_two' => $product->image_two,
            'image_three' => $product->image_three,
            'image_four' => $product->image_four,
        ];
        AppImageModel::ImageDelete($uploads);
        $product->delete($product) ? toast('Deleted Successfully!', 'success') : '';
        return redirect()->route('admin.product.index');
    }

    public function status(Product $product)
    {

        $data = $product->status == 1 ? ['status' => 0] : ['status' => 1];
        $product->update($data);
        return $data;
    }
}

