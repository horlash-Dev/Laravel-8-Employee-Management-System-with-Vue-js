@extends('layouts.auth_layout')

@section('admin-content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
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
</div> -->

        <div class="row align-items-center justify-content-md-center h-p100">               
            <div class="col-12">
                <div class="row justify-content-center no-gutters">
                    <div class="col-lg-4 col-md-5 col-12">
                        <div class="content-top-agile p-10">
                            <h2 class="text-white">Sign in to start your session</h2>                        
                        </div>
                        <div class="p-30 rounded30 box-shadowed b-2 b-dashed">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                              <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text bg-transparent text-white"><i class="ti-user"></i></span>
                                        </div>
                                         <input placeholder="Email" id="email"  type="email" class="form-control  pl-15 bg-transparent text-white plc-white @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                      @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                            
                                </div>
                            
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text  bg-transparent text-white"><i class="ti-lock"></i></span>
                                        </div>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror  pl-15 bg-transparent text-white plc-white" name="password" required autocomplete="current-password">
                                  @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                </div>
                                  <div class="row">
                                    <div class="col-6">
                                      <div class="checkbox text-white">
                                        <input type="checkbox"  name="remember" id="basic_checkbox_1">
                                        <label for="basic_checkbox_1">Remember Me</label>
                                      </div>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-6">
                                     <div class="fog-pwd text-right">
                                        @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="text-white hover-info"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
                                        @endif
                                      </div>
                                    </div>
                                
                                    <!-- /.col -->
                                    <div class="col-12 text-center">
                                      <button type="submit" class="btn btn-info btn-rounded mt-10">SIGN IN</button>
                                    </div>
                                    <!-- /.col -->
                                  </div>
                            </form>
                            
                            <div class="text-center">
                                <p class="mt-15 mb-0 text-white">Don't have an account? <a href="{{ route('register') }}" class="text-white ml-5">Sign Up</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection
