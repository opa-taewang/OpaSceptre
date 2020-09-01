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
                <li class="breadcrumb-item"><a href="{{route('admin.newsletter.show')}}">Coupon</a></li>
                <li class="breadcrumb-item">{{$newsletter->id}}</li>
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
                        <h3 class="card-title">Edit Newsletter Subscriber</h3>
                    </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                     <form method="POST" action="{{route('admin.newsletter.update', $newsletter->id)}}">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <label for="newsletter">Coupon</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$newsletter->email}}" id="newsletter">
                            @error('email')
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
