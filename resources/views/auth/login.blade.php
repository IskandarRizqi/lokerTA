@extends('front.layouts.main')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
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
</div> --}}
<!-- Content -->
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dez-bnr-inr overlay-black-middle bg-pt" style="background-image:url({{asset('front/images/banner/bnr2.jpg')}});">
        <div class="container">
            <div class="dez-bnr-inr-entry">
                {{-- <h1 class="text-white">Login</h1> --}}
                <!-- Breadcrumb row -->
                {{-- <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="#">Home</a></li>
                        <li>Login</li>
                    </ul>
                </div> --}}
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- contact area -->
    <div class="section-full content-inner-2 shop-account">
        <!-- Product -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="font-weight-700 m-t0 m-b20">Login Your Account</h3>
                </div>
            </div>
            <div>
                <div class="max-w500 m-auto m-b30">
                    <div class="p-a30 border-1 seth">
                        <div class="tab-content nav">
                            <form method="POST" action="{{route('login')}}" id="login" class="tab-pane active col-12 p-a0 ">
                                @csrf
                                <h4 class="font-weight-700">LOGIN</h4>
                                <p class="font-weight-600">If you have an account with us, please log in.</p>
                                <div class="form-group">
                                    <label class="font-weight-700">E-MAIL *</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-700">PASSWORD *</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                </div>
                                <div class="text-left">
                                    <button class="site-button m-r5 button-lg">login</button>
                                    <a data-toggle="tab" href="#forgot-password" class="m-l5"><i class="fa fa-unlock-alt"></i> Forgot Password</a>
                                </div>
                            </form>
                            <form id="forgot-password" class="tab-pane fade  col-12 p-a0">
                                <h4 class="font-weight-700">FORGET PASSWORD ?</h4>
                                <p class="font-weight-600">We will send you an email to reset your password. </p>
                                <div class="form-group">
                                    <label class="font-weight-700">E-MAIL *</label>
                                    <input name="dzName" required="" class="form-control" placeholder="Your Email Id" type="email">
                                </div>
                                <div class="text-left">
                                    <a class="site-button outline gray button-lg" data-toggle="tab" href="#login">Back</a>
                                    <button type="submit" class="site-button pull-right button-lg">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product END -->
    </div>
    <!-- contact area  END -->
</div>
<!-- Content END-->
@endsection