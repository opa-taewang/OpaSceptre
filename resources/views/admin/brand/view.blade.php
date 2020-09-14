@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Brands</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">{{Auth()->user()->role->name}}</a></li>
              <li class="breadcrumb-item active">Brand</li>
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
                        <h3 class="card-title">Brands List</h3>
                    </div>
                    <div class="ml-auto">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addBrand">Add Brand</button>
                    </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>S/N</th>
                    <th>Brand Name</th>
                    <th>Brand Logo</th>
                    <th>Options</th>
                  </tr>
                  </thead>
                  <tbody>
                      @foreach ($brand as $row=>$brand)
                        <tr>
                            <td>{{$row + 1}}</td>
                            <td>{{$brand->brand_name}}</td>
                            <td><img class="img-fluid" src="/storage/{{$brand->brand_logo}}" alt="{{$brand->brand_name}} Logo" width="100px"></td>
                            <td class="row border-0">
                                <a class="btn btn-info mx-3" href="{{route('admin.brand.edit', $brand->id)}}"><i class="far fa-edit"></i> Edit</a>
                                <form method="post" action="{{route('admin.brand.delete', $brand->id)}}">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to Remove?');"><i class="far fa-edit"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                      @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>S/N</th>
                    <th>Brand Name</th>
                    <th>Brand Logo</th>
                    <th>Options</th>
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

    <div class="modal fade" id="addBrand">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add new Brand</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="post" action="{{route('admin.brand.create')}}" enctype="multipart/form-data">
                <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="@error('brand_name') is-invalid @enderror">Brand name</label>
                            <input type="text" class="form-control @error('brand_name') is-invalid @enderror" name="brand_name" placeholder="Enter Brand name" id="brand_name">
                            @error('brand_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="brand_logo" id="customFile">
                            <label class="custom-file-label @error('brand_logo') is-invalid @enderror" for="customFile">Choose file</label>
                        </div>
                        @error('brand_logo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Brand</button>
                </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
@endsection
