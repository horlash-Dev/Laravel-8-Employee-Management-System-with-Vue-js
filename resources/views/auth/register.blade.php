@extends('layouts.auth_layout')

@section('admin-content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('UserName') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="name" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">                            
                            <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('FirstName') }}</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="name" autofocus>

                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                          <div class="form-group row">                            
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('LastName') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="name" autofocus>

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 -->

 <div class="row align-items-center justify-content-md-center h-p100">               
            <div class="col-12">
                <div class="row justify-content-center no-gutters">
                    <div class="col-lg-4 col-md-5 col-12">
                        <div class="content-top-agile p-10">
                            <h2 class="text-white">Sign Up to start your session</h2>                        
                        </div>
                        <div class="p-30 rounded30 box-shadowed b-2 b-dashed">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf


                     <div class="form-group">
                        <div class="input-group mb-3">
                           <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent text-white"><i class="ti-user"></i></span>
                               </div>
                          <input placeholder="Username" id="username"  type="text" class="form-control  pl-15 bg-transparent text-white plc-white @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autofocus>
                                      @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                </div>

                     <div class="form-group">
                        <div class="input-group mb-3">
                           <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent text-white"><i class="ti-user"></i></span>
                               </div>
                          <input placeholder="Firstname" id="firstname"  type="text" class="form-control  pl-15 bg-transparent text-white plc-white @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autofocus>
                                      @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                </div>

                  <div class="form-group">
                        <div class="input-group mb-3">
                           <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent text-white"><i class="ti-user"></i></span>
                               </div>
                          <input placeholder="Lastname" id="lastname"  type="text" class="form-control  pl-15 bg-transparent text-white plc-white @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autofocus>
                                      @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                </div>

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
                                        <input id="password" type="password" placeholder="password" class="form-control @error('password') is-invalid @enderror  pl-15 bg-transparent text-white plc-white" name="password" required autocomplete="current-password">
                                  @error('password')
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
                                        <input id="password" type="password" placeholder="Retype-password" class="form-control @error('password_confirmation') is-invalid @enderror  pl-15 bg-transparent text-white plc-white" name="password_confirmation" required autocomplete="current-password">
                                  @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                </div>
                                  <div class="row">
                                  
                                    <!-- /.col -->
                                    <div class="col-12 text-center">
                                      <button type="submit" class="btn btn-info btn-rounded mt-10">SIGN UP</button>
                                    </div>
                                    <!-- /.col -->
                                  </div>
                            </form>
                            
                            <div class="text-center">
                                <p class="mt-15 mb-0 text-white">Have an account? <a href="{{ route('login') }}" class="text-info ml-5">Sign IN</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
