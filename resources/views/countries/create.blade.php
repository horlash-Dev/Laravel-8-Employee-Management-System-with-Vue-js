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
                    <h4 class="box-title"><strong> REGISTER NEW COUNTRY</strong></h4>
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
                      <h4 class="box-title font-weight-bold">ADD A NEW COUNTRY</h4>
                      @if($errors->any())
                      @foreach($errors->all() as $err)
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> {{ $err }} </div>
                    @endforeach
                      @endif
                    <!-- /.box-header -->
                    <form class="form" method="POST" action="{{ route('country.store') }}">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label>Name</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ti-world"></i></span>
                                    </div>
                                    <input type="text" required name="name" value="{{ old('name') }}" class="form-control" placeholder="Name">
                                </div>
                            </div>
                             <div class="form-group">
                                <label>Country Code</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ti-flag"></i></span>
                                    </div>
                                    <input type="text" required name="country_code" value="{{ old('country_code') }}" class="form-control" placeholder="country code">
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
