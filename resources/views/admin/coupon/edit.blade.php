@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Coupons</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">{{Auth()->user()->role->name}}</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.coupon.show')}}">Coupon</a></li>
                <li class="breadcrumb-item">{{$coupon->id}}</li>
                <li class="breadcrumb-item active"><a href="#">edit</a></li>
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
                        <h3 class="card-title">Edit Coupon</h3>
                    </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                     <form method="POST" action="{{route('admin.coupon.update', $coupon)}}">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <label for="coupon">Coupon</label>
                            <input type="text" class="form-control @error('coupon') is-invalid @enderror" name="coupon" value="{{$coupon->coupon}}" id="coupon">
                            @error('coupon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="discount">Discount</label>
                            <input type="text" class="form-control @error('discount') is-invalid @enderror" name="discount" value="{{$coupon->discount}}" id="discount">
                            @error('discount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
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
