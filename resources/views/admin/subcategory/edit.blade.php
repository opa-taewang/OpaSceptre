@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>SubCategory</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">{{Auth()->user()->role->name}}</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.subcategory.show')}}">SubCategory</a></li>
                <li class="breadcrumb-item">{{$subcategory->id}}</li>
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
                        <h3 class="card-title">Edit Subcategory</h3>
                    </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                     <form method="POST" action="{{route('admin.subcategory.update', $subcategory)}}">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <label for="subcategory_name">subCategory name:</label>
                            <input type="text" class="form-control @error('subcategory_name') is-invalid @enderror" name="subcategory_name" value="{{$subcategory->subcategory_name}}" id="category_name">
                        </div>
                        @error('subcategory_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-control" id="category" name="category">
                            @foreach ($category as $category)
                                <option value="{{$category->id}}" {{$category->id === $subcategory->category_id ? 'selected': ''}}>{{$category->category_name}}</option>
                            @endforeach
                        </select>
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
