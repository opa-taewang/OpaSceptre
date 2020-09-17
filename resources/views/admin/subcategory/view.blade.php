@extends('admin.layouts.app')

@section('content')
    @if (Session::has('toast_success'))
        {{Alert::success('Success title', 'success message')}}
    @endif
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
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
                        <h3 class="card-title">Sub Categories List</h3>
                    </div>
                    <div class="ml-auto">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#subcategoryadd">Add Sub Category</button>
                    </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>S/N</th>
                    <th>SubCategory Name</th>
                    <th>Category Name</th>
                    <th>Options</th>
                  </tr>
                  </thead>
                  <tbody>
                      @foreach ($subcategory as $row=>$subcategory)
                        <tr>
                            <td>{{$row + 1}}</td>
                            <td>{{$subcategory->subcategory_name}}</td>
                            <td>{{$subcategory->category->category_name}}</td>
                            <td class="row border-0">
                                <a class="btn btn-info mx-3" href="{{route('admin.subcategory.edit', $subcategory->id)}}"><i class="far fa-edit"></i> Edit</a>
                                <form method="post" action="{{route('admin.subcategory.delete', $subcategory->id)}}">
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
                    <th>SubCategory Name</th>
                    <th>Category Name</th>
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

        <div class="modal fade" id="subcategoryadd">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add new Sub category</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="post" action="{{route('admin.subcategory.create')}}">
                <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="@error('subcategory_name') is-invalid @enderror">Sub Category name</label>
                            <input type="text" class="form-control @error('subcategory_name') is-invalid @enderror" name="subcategory_name" placeholder="Enter category name" id="subcategory_name">
                            @error('subcategory_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select class="form-control" id="category" name="category">
                                    <option value="">Choose a parent category</option>
                                    @foreach ($category as $category)
                                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
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
