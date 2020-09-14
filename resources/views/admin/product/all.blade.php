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
              <li class="breadcrumb-item active">Product</li>
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
                        <h3 class="card-title">Products List</h3>
                    </div>
                    <div class="ml-auto">
                        <a class="btn btn-info" href="{{route('admin.product.create')}}">Add Product</a>
                    </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>S/N</th>
                    <th>Product Name</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Brand</th>
                    <th>Quantity</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      @foreach ($product as $row=>$product)
                        <tr>
                            <td>{{$row + 1}}</td>
                            <td>{{$product->product_name}}</td>
                            <td width="10%"><img class="img-fluid w-100" src="/storage/{{$product->image_one}}" alt=""></td>
                            <td>{{$product->category_name}}</td>
                            <td>{{$product->brand_name}}</td>
                            <td>{{$product->product_quantity}}</td>
                            <td><product-status v-b-tooltip.hover title="Click to change status" product-id="{{$product->id}}" status="{{$product->status}}"></product-status></td>
                            <td class="row border-0">
                                <a class="btn btn-sm btn-info ml-1" href="{{route('admin.product.edit', $product->id)}}" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="far fa-edit"></i></a>
                                <a class="btn btn-sm btn-primary ml-1" href="{{route('admin.product.show', $product->id)}}" data-toggle="tooltip" data-placement="bottom" title="View"><i class="fas fa-eye"></i></i></a>
                                 <form method="post" action="{{route('admin.product.delete', $product->id)}}">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm btn-danger ml-1" type="submit" onclick="return confirm('Are you sure you want to Remove?');" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fas fa-trash"></i></i></button>
                                </form>
                            </td>
                        </tr>
                      @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>S/N</th>
                    <th>Product Name</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Brand</th>
                    <th>Quantity</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
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
