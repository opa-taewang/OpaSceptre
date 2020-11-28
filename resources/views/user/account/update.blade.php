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

						<form action="{{route('account.update.infomation')}}" method="POST">
                            @csrf
                            @method('patch')
                            <div>
                                <div class="row">
                                    <div class="col-sm-11">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group required-field">
                                                    <label for="first_name">First Name</label>
                                                    <input type="text" class="form-control" id="first_name" name="first_name" value="{{auth()->user()->first_name}}" required>
                                                </div><!-- End .form-group -->
                                            </div><!-- End .col-md-4 -->

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="middle_name">Middle Name</label>
                                                    <input type="text" class="form-control" id="middle_name" name="middle_name" value="{{auth()->user()->middle_name}}">
                                                </div><!-- End .form-group -->
                                            </div><!-- End .col-md-4 -->

                                            <div class="col-md-4">
                                                <div class="form-group required-field">
                                                    <label for="last_name">Last Name</label>
                                                    <input type="text" class="form-control" id="last_name" name="last_name" value="{{auth()->user()->last_name}}" required>
                                                </div><!-- End .form-group -->
                                            </div><!-- End .col-md-4 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .col-sm-11 -->
                                </div><!-- End .row -->

                                <div class="">
									<button type="submit" class="btn btn-sm btn-primary">Update Details</button>
								</div>
                            </div>
						</form>

                        <div class="mb-2"></div><!-- margin -->

                        <form action="{{route('account.generate.otp')}}" method="POST">
                            @csrf
                            <div>
                                <h3 class="mb-2">Change Email</h3>
                                <div class="form-group required-field">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{auth()->user()->email}}" required>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div><!-- End .form-group -->
                                {{-- Newsletter on email change --}}

                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" name="newsletter" id="newsletter" {{ old('newsletter') ? 'checked' : '' }} value="1">
                                    <label class="custom-control-label" for="newsletter">{{ __('Subscribe to Newsletter') }}</label>
                                </div><!-- End .custom-checkbox -->

                                <div class="">
									<button type="submit" class="btn btn-sm btn-primary">Update Email</button>
								</div>
                            </div>
                        </form>

                        <div class="mb-2"></div><!-- margin -->

                        <form method="POST" action="{{route('account.update.password')}}">
                            @csrf
                            @method('patch')
							<div>
								<h3 class="mb-2">Change Password</h3>
								<div class="row">
                                    <div class="col-md-12">
										<div class="form-group required-field">
											<label for="old_password" class="@error('old_password') is-invalid @enderror">Old Password</label>
                                            <input type="password" class="form-control" id="old_password" name="old_password">
                                            @error('old_password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
										</div><!-- End .form-group -->
									</div><!-- End .col-md-12 -->

									<div class="col-md-6">
										<div class="form-group required-field">
											<label for="new_password" class="@error('new_password') is-invalid @enderror">New Password</label>
                                            <input type="password" class="form-control" id="new_password" name="new_password">
                                            @error('new_password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
										</div><!-- End .form-group -->
									</div><!-- End .col-md-12 -->

									<div class="col-md-6">
										<div class="form-group required-field">
											<label for="confirm_password" class="@error('confirm_password') is-invalid @enderror">Confirm Password</label>
                                            <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                                            @error('confirm_password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
										</div><!-- End .form-group -->
									</div><!-- End .col-md-12 -->
                                </div><!-- End .row -->

                                <div class="">
									<button type="submit" class="btn btn-sm btn-primary">Cahnge Password</button>
								</div>

                                @if (Route::has('password.request'))
                                    <a class="forget-pass" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
							</div><!-- End #account-chage-pass -->

							<div class="required text-right">* Required Field</div>
							<div class="form-footer">
								<a href="#"><i class="icon-angle-double-left"></i>Back</a>

								<div class="form-footer-right">
									<button type="submit" class="btn btn-primary">Save</button>
								</div>
							</div><!-- End .form-footer -->
						</form>
					</div><!-- End .col-lg-9 -->

                    {{-- Include sidebar of accounts --}}
                    @include('layouts.account.aside')
				</div><!-- End .row -->
			</div><!-- End .container -->

<!-- Modal -->
@include('user.ajax.otp')

@endsection
