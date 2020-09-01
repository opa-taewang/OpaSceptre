@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Brand</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">{{Auth()->user()->role->name}}</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.brand.show')}}">Brand</a></li>
                <li class="breadcrumb-item">{{$brand->id}}</li>
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
                        <h3 class="card-title">Categories List</h3>
                    </div>
                    <div class="ml-auto">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">Add brand</button>
                    </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                     <form method="POST" action="{{route('admin.brand.update', $brand)}}" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <label for="brand_name">brand name:</label>
                            <input type="text" class="form-control @error('brand_name') is-invalid @enderror" name="brand_name" value="{{$brand->brand_name}}" id="brand_name">
                        </div>
                        @error('brand_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="brand_logo" id="customFile">
                            <label class="custom-file-label @error('brand_logo') is-invalid @enderror" for="customFile">Choose file</label>
                        </div>
                        @error('brand_logo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
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
