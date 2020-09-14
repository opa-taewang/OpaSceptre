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
              <li class="breadcrumb-item active">{{$product->id}}</li>
              <li class="breadcrumb-item"><a href="#">Edit</a></li>
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
                        <h3 class="card-title">Update Product</h3>
                    </div>
                    <div class="ml-auto">
                        <a class="btn btn-info" href="{{route('admin.product.index')}}">View All</a>
                    </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                    {{-- Content here --}}
                    <form method="post" action="{{route('admin.product.update', $product->id)}}">
                        @method('patch')
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="product_name" class="@error('product_name') is-invalid @enderror">Product Name:&nbsp;<span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('product_name') is-invalid @enderror" name="product_name" value="{{$product->product_name}}" id="product_name">
                                @error('product_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            {{-- Producty quantity --}}
                            <div class="form-group col-md-4">
                                <label for="product_quantity" class="@error('product_quantity') is-invalid @enderror">Quantity:&nbsp;<span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('product_quantity') is-invalid @enderror" name="product_quantity" value="{{$product->product_quantity}}" id="product_quantity">
                                @error('product_quantity')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>

                            {{-- Category --}}
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="selectCategory" class="@error('product_category') is-invalid @enderror">Category:&nbsp;<span class="text-danger">*</span></label>
                                    <select class="form-control select2 @error('product_category') is-invalid @enderror" name="product_category" style="width: 100%;"  id="selectCategory">
                                        <option value="">Choose Product Category</option>
                                        @foreach ($category as $category)
                                            <option value="{{$category->id}}" {{$product->category_id == $category->id ? 'selected': ''}}>{{$category->category_name}}</option>
                                        @endforeach
                                    </select>
                                    @error('product_category')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            {{-- Subcategory --}}
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="selectSubCategory" class="@error('product_subcategory') is-invalid @enderror">SubCategory:&nbsp;<span class="text-danger">*</span></label>
                                    <select class="form-control select2 @error('product_subcategory') is-invalid @enderror" name="product_subcategory" style="width: 100%;" id="selectSubCategory">
                                        <option value="">Choose Product Category</option>
                                        @foreach ($subcategory as $subcategory)
                                            <option value="{{$subcategory->id}}" {{$product->subcategory_id == $subcategory->id ? 'selected': ''}}>{{$subcategory->subcategory_name}}</option>
                                        @endforeach
                                    </select>
                                    @error('product_subcategory')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- Brand --}}
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="product_brand" class="@error('product_brand') is-invalid @enderror">Brand:&nbsp;<span class="text-danger">*</span></label>
                                    <select class="form-control select2 @error('product_brand') is-invalid @enderror" id="product_brand" name="product_brand" style="width: 100%;">
                                        <option value="">Choose Product Brand</option>
                                        @foreach ($brand as $brand)
                                            <option value="{{$brand->id}}" {{$product->brand_id == $brand->id ? 'selected': ''}}>{{$brand->brand_name}}</option>
                                        @endforeach
                                    </select>
                                    @error('product_brand')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- Product Size --}}
                            <div class="form-group col-md-4">
                                <label for="product_size" class="@error('product_size') is-invalid @enderror">Product Size:&nbsp;<span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('product_size') is-invalid @enderror" name="product_size" id="product_size" value="{{$product->product_size}}" data-role="tagsinput">
                                @error('product_size')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>
                        {{--Product colour, selling price and discount price--}}
                        <div class="row">

                            {{-- Product Colour --}}
                            <div class="form-group col-md-4">
                                <label for="product_colour" class="@error('product_colour') is-invalid @enderror">Product Colour:&nbsp;<span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('product_colour') is-invalid @enderror" name="product_colour" id="product_colour" value="{{$product->product_colour}}" data-role="tagsinput">
                                @error('product_colour')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            {{-- Producty quantity --}}
                            <div class="form-group col-md-4">
                                <label for="selling_price" class="@error('selling_price') is-invalid @enderror">Selling Price:&nbsp;<span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('selling_price') is-invalid @enderror" name="selling_price" id="selling_price" value="{{$product->selling_price}}">
                                @error('selling_price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            {{-- Discount Price --}}
                             <div class="form-group col-md-4">
                                <label for="discount_price" class="@error('discount_price') is-invalid @enderror">Discount Price:</label>
                                <input type="text" class="form-control @error('discount_price') is-invalid @enderror" name="discount_price" id="discount_price" value="{{$product->discount_price}}">
                                @error('discount_price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>
                        {{-- Product deteails text editor --}}
                        <div class="mb-2">
                            <div class="mb-3">
                                <label for="product_details">Product Details:&nbsp;<span class="text-danger @error('product_details') is-invalid @enderror">*</span></label>
                                <textarea id="product_details" class="textareaDetails @error('product_details') is-invalid @enderror" name="product_details" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                    {{$product->product_details}}
                                </textarea>
                                @error('product_details')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <div class="form-group col-md-12">
                                <label for="video_link @error('video_link') is-invalid @enderror">Video Link:&nbsp;<span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('video_link') is-invalid @enderror" name="video_link" id="video_link" value="{{$product->video_link}}">
                                @error('video_link')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row ml-1 mb-3">
                            <div class="custom-control custom-checkbox col-md-4">
                                <input type="checkbox" class="custom-control-input" id="main_slider" name="main_slider" value="1" {{$product->main_slider == '1' ? 'checked' : ''}}>
                                <label class="custom-control-label" for="main_slider">Main Slider</label>
                            </div>

                            <div class="custom-control custom-checkbox col-md-4">
                                <input type="checkbox" class="custom-control-input" id="hot_deal" name="hot_deal" value="1" {{$product->hot_deal == '1' ? 'checked' : ''}}>
                                <label class="custom-control-label" for="hot_deal">Hot Deal</label>
                            </div>

                            <div class="custom-control custom-checkbox col-md-4">
                                <input type="checkbox" class="custom-control-input" id="best_rated" name="best_rated" value="1" {{$product->best_rated == '1' ? 'checked' : ''}}>
                                <label class="custom-control-label" for="best_rated">Best Rated</label>
                            </div>
                        </div>

                        <div class="row ml-1 mb-3">
                            <div class="custom-control custom-checkbox col-md-4">
                                <input type="checkbox" class="custom-control-input" id="trend_product" name="trend_product" value="1" {{$product->trend == '1' ? 'checked' : ''}}>
                                <label class="custom-control-label" for="trend_product">Trend Product</label>
                            </div>

                            <div class="custom-control custom-checkbox col-md-4">
                                <input type="checkbox" class="custom-control-input" id="mid_slider" name="mid_slider" value="1" {{$product->mid_slider == '1' ? 'checked' : ''}}>
                                <label class="custom-control-label" for="mid_slider">Mid Slider</label>
                            </div>

                            <div class="custom-control custom-checkbox col-md-4">
                                <input type="checkbox" class="custom-control-input" id="hot_new" name="hot_new" value="1" {{$product->hot_new == '1' ? 'checked' : ''}}>
                                <label class="custom-control-label" for="hot_new">Hot New</label>
                            </div>
                        </div>

                        <div class="row ml-1 mb-3">
                            <button class="btn btn-success btn-block" type="submit">Update Product</button>
                        </div>
                    </form>

                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="row">
                    <div>
                        <h3 class="card-title font-weight-bolder">Update Products Image</h3>
                    </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                    {{-- Content here --}}
                    <form method="post" action="{{route('admin.product.updateImage', $product->id)}}" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="row mb-5">
                            {{-- Image One --}}
                            <div class="col-md-6">
                                <label>Image One(Main Thumbnail):&nbsp;<span class="text-danger">*</span></label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input @error('image_one') is-invalid @enderror" name="image_one" onchange="readURL(this);" id="customFile">
                                    <label class="custom-file-label @error('image_one') is-invalid @enderror" for="customFile">Choose file</label>
                                    <img class="mb-5 mt-2 ml-5 w-25" id="one" src="/storage/{{$product->image_one}}">
                                    @error('image_one')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Image two --}}
                            <div class="col-md-6">
                                <label>Image Two:&nbsp;<span class="text-danger">*</span></label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input @error('image_two') is-invalid @enderror" name="image_two" onchange="readURL2(this);" id="customFile">
                                    <label class="custom-file-label @error('image_two') is-invalid @enderror" for="customFile">Choose file</label>
                                    <img class="mb-5 mt-2 ml-5 w-25" id="two" src="/storage/{{$product->image_two}}">
                                    @error('image_two')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mb-5">
                            {{-- Image three --}}
                            <div class="col-md-6">
                                <label>Image Three:&nbsp;<span class="text-danger">*</span></label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input @error('image_three') is-invalid @enderror" name="image_three" onchange="readURL3(this);" id="customFile">
                                    <label class="custom-file-label @error('image_three') is-invalid @enderror" for="customFile">Choose file</label>
                                    <img class="mb-5 mt-2 ml-5 w-25" id="three" src="/storage/{{$product->image_three}}">
                                    @error('image_three')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- Image four --}}
                            <div class="col-md-6">
                                <label>Image Four:</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input @error('image_four') is-invalid @enderror" name="image_four" onchange="readURL4(this);" id="customFile">
                                    <label class="custom-file-label @error('image_four') is-invalid @enderror" for="customFile">Choose file</label>
                                    <img class="mb-5 mt-2 ml-5 w-25" id="four" src="/storage/{{$product->image_four}}">
                                    @error('image_four')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row ml-1 mb-3">
                            <button class="btn btn-info btn-block" type="submit">Update Product Image</button>
                        </div>
                    </form>

                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
