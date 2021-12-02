@extends('layouts.master')

@section('admin-content')
    <div class="content-wrapper">
      <div class="container-full">
        <section class="content">

          <div class="row">
          <div class="col-12">
              <div class="box">
                <div class="box-header with-border">
                  <h4 class="box-title font-weight-bold mb-15">Total Countries</h4><br>
               <a href="{{ route('department.create') }}" class="btn-primary btn px-3 py-2 mb-8">Add New Department</a>
                  <div class="box-controls pull-right">
                    <div class="lookup lookup-circle lookup-right">
                        <form class="form-inline" action="{{ route('department.index') }}" method="GET">
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
                          <th>Department Name</th>
                          <th>Registered On</th>
                            <th>Actions</th>
                        </tr>
                        @foreach($department as $key => $departments)
                        <tr>
                          <td class="text-capitalize">{{ ++$key }}</td>
                          <td class="text-capitalize">{{ $departments->name }}</td>
                          <td class="text-muted"><i class="fa fa-clock-o">{{ $departments->created_at }}</i></td>
                          <td class="text-capitalize">
                        <a href="{{ route('department.edit', $departments->name) }}" class="btn btn-primary mb-2 btn-rounded btn-outline">edit</a>
                        <form class="form-group" action="{{ route('department.destroy', $departments->name) }}" 
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
