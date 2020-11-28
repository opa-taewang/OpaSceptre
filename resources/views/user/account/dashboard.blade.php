@extends('layouts.app')
@section('content')
			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index-2.html"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">My Account</li>
					</ol>
				</div>
			</nav>

			<div class="container mb-5">
				<div class="row">
					<div class="col-lg-9 order-lg-last dashboard-content">
						<h2>Account Information</h2>

                        {{-- Content here --}}
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="product_name" class="font-weight-light">First Name:</label>
                            <p class="font-weight-bolder">{{auth()->user()->first_name}}</p>
                        </div>
                        {{-- Product Code --}}
                        <div class="form-group col-md-4">
                            <label for="product_code" class="font-weight-light">Middle Name:</label>
                            <p class="font-weight-bolder">{{auth()->user()->middle_name}}</p>
                        </div>
                        {{-- Producty quantity --}}
                        <div class="form-group col-md-4">
                            <label for="product_quantity" class="font-weight-light">Last Name:</label>
                            <p class="font-weight-bolder">{{auth()->user()->last_name}}</p>
                        </div>
                    </div>

					</div><!-- End .col-lg-9 -->

                    {{-- Include sidebar of accounts --}}
                    @include('layouts.account.aside')
				</div><!-- End .row -->
			</div><!-- End .container -->

@endsection
