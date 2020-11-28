@if (Session::has('otp_generated'))
    @php
        $data = Session::get('otp_generated');
    @endphp
    <form action="{{route('account.update.email')}}" method="POST">
        @csrf
        @method('patch')
        <input type="hidden" class="form-control" id="email" name="email" value="{{$data->email}}" required>
        <input type="hidden" class="form-control" id="newsletter" name="newsletter" value="{{$data->newsletter}}" required>

        <div class="modal fade" id="otpInput" tabindex="-1" role="dialog" aria-labelledby="otpInputLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="otpInputLabel">Enter OTP</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                            <div>
                                <div class="form-group required-field">
                                    <label class="@error('otp') is-invalid @enderror" for="otp">Email</label>
                                    <input type="text" class="form-control @error('otp') is-invalid @enderror" id="otp" name="otp" placeholder="Enter OTP" required>
                                     @error('otp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div><!-- End .form-group -->
                                {{-- Newsletter on email change --}}

                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endif
