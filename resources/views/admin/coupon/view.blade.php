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
              <li class="breadcrumb-item active">Coupon</li>
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
                        <h3 class="card-title">Coupons List</h3>
                    </div>
                    <div class="ml-auto">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">Add Coupon</button>
                    </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>S/N</th>
                    <th>Coupon</th>
                    <th>Discount</th>
                    <th>Options</th>
                  </tr>
                  </thead>
                  <tbody>
                      @foreach ($coupon as $row=>$coupon)
                        <tr>
                            <td>{{$row + 1}}</td>
                            <td>{{$coupon->coupon}}</td>
                            <td>{{$coupon->discount}}%</td>
                            <td class="row">
                                <a class="btn btn-info" href="{{route('admin.coupon.edit', $coupon->id)}}"><i class="far fa-edit"></i> Edit</a>
                                 <form method="post" action="{{route('admin.coupon.delete', $coupon->id)}}">
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
              <h4 class="modal-title">Add new coupon</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="post" action="{{route('admin.coupon.create')}}">
                <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="@error('coupon') is-invalid @enderror">Coupon</label>
                            <input type="text" class="form-control @error('coupon') is-invalid @enderror" name="coupon" placeholder="Enter coupon" value="{{old('coupon')}}" id="coupon">
                            @error('coupon')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="name" class="@error('discount') is-invalid @enderror">Discount</label>
                            <input type="text" class="form-control @error('discount') is-invalid @enderror" name="discount" placeholder="Enter discount" value="{{old('discount')}}" id="discount">
                            @error('discount')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Coupon</button>
                </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
@endsection
