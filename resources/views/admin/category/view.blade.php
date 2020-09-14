@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">{{Auth()->user()->role->name}}</a></li>
              <li class="breadcrumb-item active">Category</li>
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
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">Add Category</button>
                    </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>S/N</th>
                    <th>Category Name</th>
                    <th>Options</th>
                  </tr>
                  </thead>
                  <tbody>
                      @foreach ($category as $row=>$category)
                        <tr>
                            <td>{{$row + 1}}</td>
                            <td>{{$category->category_name}}</td>
                            <td class="row border-0">
                                <a class="btn btn-info mx-3" href="{{route('admin.category.edit', $category->id)}}"><i class="far fa-edit"></i> Edit</a>
                                 <form method="post" action="{{route('admin.category.delete', $category->id)}}">
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
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
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

    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add new category</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="post" action="{{route('admin.category.create')}}">
                <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="@error('category_name') is-invalid @enderror">Category name</label>
                            <input type="text" class="form-control @error('category_name') is-invalid @enderror" name="category_name" placeholder="Enter category name" id="category_name">
                            @error('category_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Category</button>
                </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
@endsection
