@extends('layouts.app')
@section('content')
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                </ol>
            </div>
        </nav>

        <div class="container mb-6">
            <div class="container col-md-12 border-0 d-flex flex-column">
                <div class="mx-auto">
                        <span class="fa-stack fa-7x text-secondary">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fas fa-check-circle fa-stack-1x fa-inverse"></i>
                        </span>
                        <h3 class="font-weight-bold text-muted">Order Payment Successful</h3>
                </div>
                <div class="mx-auto">
                        <p><a href="{{route('login')}}">Track your order here</a></p>
                        <p><a href="/"class="btn btn-block btn-secondary py-3 px-4">Continue Shopping</a></p>
                </div>
            </div>
        </div><!-- End .container -->

@endsection
