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
              <li class="breadcrumb-item active">{{$paymentMethod->id}}</li>
              <li class="breadcrumb-item"><a href="#">Edit</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        {{-- <div class="row"> --}}
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="row">
                    <div>
                        <h3 class="card-title font-weight-bolder">Update {{$paymentMethod->payment_name}}</h3>
                    </div>

                     <div class="ml-auto my-auto row">

                        <div>
                            <update-payment-status payment-id="{{$paymentMethod->id}}" payment-name="{{$paymentMethod->payment_name}}" payment-status="{{$paymentMethod->payment_status}}"></update-payment-status>
                        </div>

                        <div>
                            <a class="btn btn-info" href="{{route('admin.paymentMethod.show')}}">View All</a>
                        </div>

                    </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                    {{-- Content here --}}
                    <div class="">
                        <form method="post" action="{{route('admin.paymentMethod.updateImage', $paymentMethod->id)}}" enctype="multipart/form-data">
                            @method('patch')
                            @csrf

                            {{-- Image One --}}
                            <div class="col-md-12">
                                <label>Image One(Main Thumbnail):&nbsp;<span class="text-danger">*</span></label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input @error('payment_logo') is-invalid @enderror" name="payment_logo" onchange="readURL(this);" id="customFile">
                                    <label class="custom-file-label @error('payment_logo') is-invalid @enderror" for="customFile">Choose file</label>
                                    <img class="mb-5 mt-2 ml-5 w-25" id="one" src="https://res.cloudinary.com/opasceptre/image/upload/{{$paymentMethod->payment_logo}}">
                                    @error('payment_logo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="row ml-1 mb-1 mt-5">
                                    <button class="btn btn-primary btn-block" type="submit">Update {{ucfirst($paymentMethod->payment_name)}} Image</button>
                                </div>
                                {{-- </div> --}}
                            </div>
                        </form>
                    </div>

                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        {{-- </div> --}}
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
