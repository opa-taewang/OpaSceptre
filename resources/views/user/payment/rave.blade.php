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
        <form method="POST" action="{{ route('pay.rave') }}" id="paymentForm">
            @csrf
            <input type="hidden" name="amount" value="500" /> <!-- Replace the value with your transaction amount -->
            <input type="hidden" name="payment_method" value="both" /> <!-- Can be card, account, both -->
            <input type="hidden" name="description" value="Beats by Dre. 2017" /> <!-- Replace the value with your transaction description -->
            <input type="hidden" name="email" value="opasceptre@gmail.com" /> <!-- Replace the value with your customer email -->
            <input type="hidden" name="firstname" value="Oluwole" /> <!-- Replace the value with your customer firstname -->
            <input type="hidden" name="lastname" value="Adebiyi" /> <!-- Replace the value with your customer lastname -->
            {{-- <input type="hidden" name="metadata" value="{{ json_encode($array) }}" > <!-- Meta data that might be needed to be passed to the Rave Payment Gateway --> --}}
            <input type="hidden" name="phonenumber" value="090929992892" /> <!-- Replace the value with your customer phonenumber -->
            {{-- <input type="hidden" name="paymentplan" value="362" /> <!-- Ucomment and Replace the value with the payment plan id --> --}}
            <input type="hidden" name="ref" value="MY_NAME_5uwh2a2a7f270ac98" /> <!-- Ucomment and  Replace the value with your transaction reference. It must be unique per transaction. You can delete this line if you want one to be generated for you. -->
            <input type="submit" value="Buy"  />
        </form>
    </div>
@endsection
