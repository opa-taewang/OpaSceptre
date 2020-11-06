@extends('admin.layouts.app')

@section('content')
  <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">{{Auth()->user()->role->name}}</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            @foreach ($payment_methods as $payment_method)
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <img class="" src="https://res.cloudinary.com/opasceptre/image/upload/v1600627348/{{$payment_method->payment_logo}}" alt="" width="100%" height="100px">
                        <a href="{{route('admin.paymentMethod.edit', $payment_method->id)}}" class="small-box-footer {{$payment_method->payment_status == 1 ? 'bg-primary': 'bg-secondary'}}">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            @endforeach
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
