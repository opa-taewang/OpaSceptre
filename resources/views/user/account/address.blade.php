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
                        <h2>Address Book</h2>

                        <ul class="checkout-steps">
                            <li>
                                <div class="checkout-info-box">
                                    <h3 class="step-title">Shipping Address:</h3>
                                    <div class="row">
                                        @foreach ($shipping_addresses as $shipping_address)
                                        <div class="col-md-4 border border-info m-1">
                                            <address>
                                                {{$shipping_address->first_name}} {{$shipping_address->last_name}} <br>
                                                {{$shipping_address->street_address}} <br>
                                                {{$shipping_address->lgarea_name}} <br>
                                                {{$shipping_address->state_name}}<br>
                                                Nigeria<br>
                                                (234) {{$shipping_address->contact_number}}
                                            </address>
                                            <div class="row">
                                                <div class="mr-auto px-3">
                                                    <update-address address-id="{{$shipping_address->id}}"></update-address>
                                                </div>
                                                <div class="ml-auto px-3">
                                                    @if ($shipping_address->address_default == 1)
                                                        <span class="sr-only">Default Address</span><i class="fas fa-star text-success"></i><i class="far fa-star text-success"></i>
                                                    @else
                                                        <default-address address-id="{{$shipping_address->id}}" address-status={{$shipping_address->address_default}}></default-address>
                                                    @endif
                                                </div>
                                            </div>
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
