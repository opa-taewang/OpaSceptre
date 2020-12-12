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
						<h2>Edit Account Information</h2>

                        <ul class="checkout-steps">
                            <li>
                                <div class="checkout-info-box">
                                    <h3 class="step-title">Shipping Address:</h3>
                                    <div class="row">
                                        @foreach ($orders as $order)
                                        <div class="col-md-4 border border-info m-1">
                                            {{-- Order here --}}

                                        </div>
                                        @endforeach
                                    </div>
                                </div><!-- End .checkout-info-box -->

                            </li>
                        </ul>
					</div><!-- End .col-lg-9 -->

                    {{-- Include sidebar of accounts --}}
                    @include('layouts.account.aside')
				</div><!-- End .row -->
			</div><!-- End .container -->

@endsection
