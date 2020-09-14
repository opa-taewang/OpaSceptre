@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Products</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">{{Auth()->user()->role->name}}</a></li>
              <li class="breadcrumb-item"><a href="{{route('admin.product.index')}}">Product</a></li>
              <li class="breadcrumb-item active">Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="row">
                    <div>
                        <h3 class="card-title">Add Products</h3>
                    </div>
                    <div class="ml-auto">
                        <a class="btn btn-info" href="{{route('admin.product.index')}}">View All</a>
                        <a class="btn btn-info" href="{{route('admin.product.edit', $product)}}">Edit Product</a>
                    </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                    {{-- Content here --}}
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="product_name" class="font-weight-light">Product Name:</label>
                            <p class="font-weight-bolder">{{$product->product_name}}</p>
                        </div>
                        {{-- Product Code --}}
                        <div class="form-group col-md-4">
                            <label for="product_code" class="font-weight-light">Product Code:</label>
                            <p class="font-weight-bolder">{{$product->product_code}}</p>
                        </div>
                        {{-- Producty quantity --}}
                        <div class="form-group col-md-4">
                            <label for="product_quantity" class="font-weight-light">Quantity:</label>
                            <p class="font-weight-bolder">{{$product->product_quantity}}</p>
                        </div>
                    </div>
                    <div class="row">
                        {{-- Category --}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="selectCategory" class="font-weight-light">Category:</label>
                                <p class="font-weight-bolder">{{$category}}</p>
                            </div>
                        </div>
                        {{-- Subcategory --}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="selectSubCategory" class="font-weight-light">SubCategory:</label>
                                <p class="font-weight-bolder">{{$subcategory}}</p>
                            </div>
                        </div>
                        {{-- Brand --}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="product_brand" class="font-weight-light">Brand:</label>
                                <p class="font-weight-bolder">{{$brand}}</p>
                            </div>
                        </div>
                    </div>
                    {{-- Product siz , colour and price --}}
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="product_size" class="font-weight-light">Product Size:</label>
                            <p class="font-weight-bolder">{{$subcategory}}</p>
                        </div>
                        {{-- Product Colour --}}
                        <div class="form-group col-md-3">
                            <label for="product_colour" class="font-weight-light">Product Colour:</label>
                            <p class="font-weight-bolder">{{$subcategory}}</p>
                        </div>
                        {{-- Producty quantity --}}
                        <div class="form-group col-md-3">
                            <label for="selling_price" class="font-weight-light">Selling Price:</label>
                            <p class="font-weight-bolder">{{$product->selling_price}}</p>
                        </div>
                        {{-- Discount Price --}}
                            <div class="form-group col-md-3">
                            <label for="discount_price" class="font-weight-light">Discount Price:</label>
                            <p class="font-weight-bolder">{{$product->discount_price}}</p>
                        </div>
                    </div>
                    {{-- Product deteails text editor --}}
                    <div class="mb-2">
                        <div class="mb-3">
                            <label for="product_details">Product Details:&nbsp;<span class="text-danger">*</span></label>
                            <span>{!! $product->product_details !!}</span>
                        </div>
                    </div>

                    <div class="">
                        <div class="form-group">
                            <label for="video_link" class="font-weight-light">Video Link:</label>
                            <p class="font-weight-bolder">{{$product->video_link}}</p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="video_link">Image One(Main Thumbnail):</label>
                            <img class="img-fluid" src="/storage/{{$product->image_one}}" alt="">
                        </div>

                        <div class="col-md-3">
                            <label for="video_link">Image Two:</label>
                            <img class="img-fluid" src="/storage/{{$product->image_two}}" alt="">

                        </div>

                        <div class="col-md-3">
                            <label for="video_link">Image Three:</label>
                            <img class="img-fluid" src="/storage/{{$product->image_three}}" alt="">
                        </div>

                        <div class="col-md-3">
                            <label for="video_link">Image Four:</label>
                            <img class="img-fluid" src="/storage/{{$product->image_four}}" alt="">
                        </div>
                    </div>

                    <div class="row ml-1 mb-3">
                        <div class="row col-md-4">
                            <button class="btn btn-sm {{$product->main_slider == 1 ? 'btn-success' : 'btn-danger'}}" type="button">{{$product->main_slider == 1 ? 'active' : 'inactive'}}</button>
                            <label class="ml-2" for="main_slider">Main Slider</label>
                        </div>

                        <div class="row col-md-4">
                           <button class="btn btn-sm {{$product->hot_deal == 1 ? 'btn-success' : 'btn-danger'}}" type="button">{{$product->hot_deal == 1 ? 'active' : 'inactive'}}</button>
                            <label class="ml-2" for="hot_deal">Hot Deal</label>
                        </div>

                        <div class="row col-md-4">
                            <button class="btn btn-sm {{$product->best_rated == 1 ? 'btn-success' : 'btn-danger'}}" type="button">{{$product->best_rated == 1 ? 'active' : 'inactive'}}</button>
                            <label class="ml-2" for="best_rated">Best Rated</label>
                        </div>
                    </div>

                    <div class="row ml-1 mb-3">
                        <div class="row col-md-4">
                            <button class="btn btn-sm {{$product->trend == 1 ? 'btn-success' : 'btn-danger'}}" type="button">{{$product->trend == 1 ? 'active' : 'inactive'}}</button>
                            <label class="ml-2" for="trend_product">Trend Product</label>
                        </div>

                        <div class="row col-md-4">
                            <button class="btn btn-sm {{$product->mid_slider == 1 ? 'btn-success' : 'btn-danger'}}" type="button">{{$product->mid_slider == 1 ? 'active' : 'inactive'}}</button>
                            <label class="ml-2" for="mid_slider">Mid Slider</label>
                        </div>

                        <div class="row col-md-4">
                            <button class="btn btn-sm {{$product->hot_new == 1 ? 'btn-success' : 'btn-danger'}}" type="button">{{$product->hot_new == 1 ? 'active' : 'inactive'}}</button>
                            <label class="ml-2" for="hot_new">Hot New</label>
                        </div>
                    </div>

                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
