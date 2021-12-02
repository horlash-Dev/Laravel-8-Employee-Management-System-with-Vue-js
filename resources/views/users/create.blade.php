@extends('layouts.master')

@section('admin-content')
    <div class="content-wrapper">
      <div class="container-full">


        <!-- Main content -->
        <section class="content">

            <div class="row justify-content-center">

            <!--Box controls!-->
              <div class="col-md-8 col-12">
                <div class="box">
                  <div class="box-header with-border">
                    <h4 class="box-title"><strong> REGISTER NEW USER</strong></h4>
                    <ul class="box-controls pull-right">
                      <li><a class="box-btn-close" href="#"></a></li>
                      <li><a class="box-btn-slide"  href="#"></a></li>  
                      <li><a class="box-btn-fullscreen" href="#"></a></li>
                    </ul>
                  </div>

                  <div class="box-body">
                    <div class="box-body">
                  <div class="box">
                    <div class="box-header with-border">
                      <h4 class="box-title font-weight-bold">ADD A NEW USER</h4>
                      @if($errors->any())
                      @foreach($errors->all() as $err)
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> {{ $err }} </div>
                    @endforeach
                      @endif
                    <!-- /.box-header -->
                    <form class="form" method="POST" action="{{ route('user.store') }}">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label>UserName</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="text" required name="username" value="{{ old('username') }}" class="form-control" placeholder="Username">
                                </div>
                            </div>
                             <div class="form-group">
                                <label>FisrtName</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="text" required name="first_name" value="{{ old('first_name') }}" class="form-control" placeholder="Firstname">
                                </div>
                            </div>
                        <div class="form-group">
                                <label>LastName</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="text" required name="last_name" value="{{ old('last_name') }}" class="form-control" placeholder="Lastname">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Email address</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ti-email"></i></span>
                                    </div>
                                    <input type="email" name="email" required  value="{{ old('email') }}" class="form-control" placeholder="Email">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ti-lock"></i></span>
                                    </div>
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="reset" class="btn btn-rounded btn-warning btn-outline mr-1">
                              <i class="ti-trash"></i> Cancel
                            </button>
                            <button type="submit" class="btn btn-rounded btn-primary btn-outline">
                              <i class="ti-save-alt"></i>
                              SIGN UP
                            </button>
                        </div>  
                    </form>
                  </div>
                  <!-- /.box -->            


                    </div>
                  </div>
                </div>
              </div>

            </div>



</div>
        </section>
        <!-- /.content -->
      </div>
  </div>

@endsection
