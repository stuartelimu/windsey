@extends('layouts.app')

@section('content')

<!-- breadcrumb-start -->
<section class="breadcrumb breadcrumb_bg banner-bg-1 overlay2 ptb200">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 offset-lg-1">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <h2>Login</h2>
                        <p> <a href="index.html">Home.</a> <span></span> Login</p> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-end -->


<section class="contact-section">

<div class="container">
    <div class="row justify-content-center">

        <div class="col-8">
            <h2 class="contact-title">{{ __('Login') }}</h2>
        </div>

        <div class="col-lg-8">

            <div class="card-body">
                <form class="form-contact contact_form" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="{{ __('E-Mail Address') }}" autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">

                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="{{ __('Password') }}" autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="button boxed-btn primary">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="underline-hover" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</section>

@endsection
