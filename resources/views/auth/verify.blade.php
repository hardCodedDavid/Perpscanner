@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 bg-dark p-5 rounded">
            @if (session('resent'))
                <div class="alert alert-success" role="alert">
                    {{ __('A fresh verification link has been sent to your email address.') }}
                </div>
            @endif

            @if (session('otp-error'))

                <div class="alert alert-danger" role="alert">
                    {{ session('otp-error') }}
                </div>
            @endif
            <div class="col-12">
                <h2 class="text-white">Verify Your Email Address</h2>
                <p class="text-muted">Before proceeding, please check your email for a verification link.</p>
            </div>
            <div class="col-12">
                <form method="POST" action="{{ route('verification.verify.code') }}">
                    @csrf
                    <h3 class="text-muted">Enter OTP</h3>
                    <div class="d-flex g-3">
                        <input type="text" name="otp[]" class="form-control form-input m-1 text-white" style="width: 50px; height: 50px; font-size: 20px;" maxlength="1" >
                        <input type="text" name="otp[]" class="form-control form-input m-1 text-white" style="width: 50px; height: 50px; font-size: 20px;" maxlength="1" >
                        <input type="text" name="otp[]" class="form-control form-input m-1 text-white" style="width: 50px; height: 50px; font-size: 20px;" maxlength="1" >
                        <input type="text" name="otp[]" class="form-control form-input m-1 text-white" style="width: 50px; height: 50px; font-size: 20px;" maxlength="1" >
                        <input type="text" name="otp[]" class="form-control form-input m-1 text-white" style="width: 50px; height: 50px; font-size: 20px;" maxlength="1" >
                        <input type="text" name="otp[]" class="form-control form-input m-1 text-white" style="width: 50px; height: 50px; font-size: 20px;" maxlength="1" >
                    </div>
                    @error('otp')
                        <div>
                            <strong class="small font-weight-bold text-danger">
                                {{ $message }}
                            </strong>
                        </div>
                    @enderror
                    <div class="mt-3">
                        <button type="submit" class="cus-btn">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-12">
                <p>
                    If you did not receive the email
                </p>
                <form class="d-inline" method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit" class="link-text btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
