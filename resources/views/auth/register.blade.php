@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form class="row g-3 bg-dark mb-2 mt-1 text-muted rounded" method="POST" action="{{ route('register') }}" style="padding: 30px;">
                @csrf
                <div class="col-12">
                    <h2 class="text-white">Create Account</h2>
                    <p class="text-muted">Fill the form below to create an account</p>
                </div>
                <div class="col-12 d-flex">
                    <div class="col-6 m-1">
                        <label for="first_name" class="form-label">First Name</label>
                        <div class="input-group">
                            <input type="text" class="form-control form-input" name="first_name" value="{{ old('first_name') }}" required>
                        </div>
                        @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-6 m-1">
                        <label for="last_name" class="form-label">Last Name</label>
                        <div class="input-group">
                            <input type="text" class="form-control form-input" name="last_name" value="{{ old('last_name') }}" required>
                        </div>
                        @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                
                <div class="col-12">
                    <label for="email" class="form-label">Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control form-input" name="email" value="{{ old('email') }}" required>
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-12 d-flex">
                    <div class="col-6 m-1">
                        <label for="email" class="form-label">Password</label>
                        <div class="input-group">
                            <input id="password" type="password" class="form-control form-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        </div>
                        @error('password')
                            <span class="invalid-feedback text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-6 m-1">
                        <label for="password-confirm" class="form-label">Confirm Password</label>
                        <div class="input-group">
                            <input id="password-confirm" type="password" class="form-control form-input @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="current-password">
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <label for="username" class="form-label">Username</label>
                    <div class="input-group">
                        <input type="text" class="form-control form-input" name="username" value="{{ old('username') }}" required>
                    </div>
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-12 d-flex">
                    <div class="col-6 m-1">
                        <label for="country" class="form-label">Country</label>
                        <div class="input-group">
                            <input type="text" class="form-control form-input" name="country" value="{{ old('country') }}" required>
                        </div>
                        @error('country')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-6 m-1">
                        <label for="phone" class="form-label">Phone</label>
                        <div class="input-group">
                            <input type="text" class="form-control form-input" name="phone" value="{{ old('phone') }}" required>
                        </div>
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <button type="submit" class="cus-btn">Submit</button>
                </div>
                <div class="col-12">
                    <p>Already have an existing account <a href="{{ route('login') }}" class="link-text">Login</a></p>
                </div>
                {{-- @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif --}}
            </form>
        </div>
    </div>
</div>
@endsection
