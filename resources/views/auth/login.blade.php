@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form class="row g-3 bg-dark mb-2 mt-1 text-muted rounded" method="POST" action="{{ route('login') }}" style="padding: 30px;">
                @csrf
                <div class="col-12">
                    <h2 class="text-white">Welcome Dawg🎉</h2>
                    <p class="text-muted">Let's get started! Sign in to continue</p>
                </div>
                @if(Session::has('error'))
                    <div class="alert alert-danger text-white">
                    {{ Session::get('error')}}
                    </div>
                @endif
                <div class="col-12">
                    <label for="email" class="form-label">Email</label>
                    <div class="input-group">
                        <input type="email" step="any" id="email" class="form-control form-input text-white @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                    </div>
                    <div class="input-group">
                    
                    @error('email')
                        <span >
                            <p class="text-danger">{{ $message }}</p>
                        </span>
                    @enderror
                     </div>
                </div>
                <div class="col-12">
                    <label for="email" class="form-label">Password</label>
                    <div class="input-group">
                        <input id="password" type="password" class="form-control form-input @error('password') is-invalid @enderror text-white" name="password" required autocomplete="current-password">
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col">
                    <button type="submit" class="cus-btn">Submit</button>
                </div>
                <div class="col-12">
                    <p>Don't have an existing account <a href="{{ route('register') }}" class="link-text">Signup</a></p>
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
