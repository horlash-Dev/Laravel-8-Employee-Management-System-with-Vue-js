@extends('layouts.master')

@section('admin-content')
    <div class="content-wrapper">
      <div class="container-full">
        <section class="content">

          <div class="row">
          <div class="col-12">
              <div class="box">
                <div class="box-header with-border">
                  <h4 class="box-title font-weight-bold mb-15">Total State</h4><br>
               <a href="{{ route('state.create') }}" class="btn-primary btn px-3 py-2 mb-8">Add New State</a>
                  <div class="box-controls pull-right">
                    <div class="lookup lookup-circle lookup-right">
                        <form class="form-inline" action="{{ route('state.index') }}" method="GET">
                            @csrf
                           <input type="text" required placeholder="search" name="search">
                        </form>
                    </div>
                  </div>
                  <br>
                     @if(session('message'))
                        <div class="mt-15 alert alert-primary text-center alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <b>{{ session('message') }}</b> </div>
                      @endif
                     @if($errors->any())
                      @foreach($errors->all() as $err)
                        <div class=" mt-10 alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> {{ $err }} </div>
                    @endforeach
                      @endif
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <tr>
                          <th>#</th>
                          <th>State Name</th>
                          <th>COUNTRY</th>
                          <th>Registered On</th>
                            <th>Actions</th>
                        </tr>
                        @foreach($state as $key => $states)
                        <tr>
                          <td class="text-capitalize">{{ ++$key }}</td>
                          <td class="text-capitalize">{{ $states->name }}</td>
                          <td class="text-capitalize">{{ $states->country->country_code }}</td>
                          <td class="text-muted"><i class="fa fa-clock-o">{{ $states->created_at }}</i></td>
                          <td class="text-capitalize">
                        <a href="{{ route('state.edit', $states->name) }}" class="btn btn-primary mb-2 btn-rounded btn-outline">edit</a>
                        <form class="form-group" action="{{ route('state.destroy', $states->name) }}" 
                            method="POST">
                            @method("DELETE")
                            @csrf
                            <button type="submit" class="btn btn-danger btn-rounded btn-outline">Delete</button>
                        </form>
                          </td>
                      </tr>
                        @endforeach
                      </table>
                    </div>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
        </div>
    </section>

        <!-- /.content -->
      </div>
  </div>
@endsection
