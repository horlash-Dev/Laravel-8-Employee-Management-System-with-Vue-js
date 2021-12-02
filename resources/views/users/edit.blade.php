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
                    <h4 class="box-title"><strong class="text-uppercase">EDIT {{$user->username}} DETAILS</strong></h4>
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
                      <h4 class="box-title font-weight-bold">UPDATE THE FORM</h4>
                      @if($errors->any())
                      @foreach($errors->all() as $err)
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> {{ $err }} </div>
                    @endforeach
                      @endif
                    <!-- /.box-header -->
                    <form class="form" method="POST" action="{{ route('user.update', $user->username) }}">
                        @csrf
                        @method('PUT')
                        <div class="box-body">
                            <div class="form-group">
                                <label>UserName</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="text" required name="username" value="{{ old('username', $user->username) }}" class="form-control" placeholder="Username">
                                </div>
                            </div>
                             <div class="form-group">
                                <label>FisrtName</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="text" required name="first_name" value="{{ old('first_name',$user->first_name) }}" class="form-control" placeholder="Firstname">
                                </div>
                            </div>
                        <div class="form-group">
                                <label>LastName</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="text" required name="last_name" value="{{ old('last_name', $user->last_name) }}" class="form-control" placeholder="Lastname">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Email address</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ti-email"></i></span>
                                    </div>
                                    <input type="email" name="email" required  value="{{ old('email',$user->email) }}" class="form-control" placeholder="Email">
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
                              SUBMIT
                            </button>
                            <a href="{{ route('change.password', $user->username) }}" class="btn btn-rounded btn-success btn-outline">
                              <i class="ti-save-alt"></i>
                             CHANGE PASSWORD
                            </a>
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
