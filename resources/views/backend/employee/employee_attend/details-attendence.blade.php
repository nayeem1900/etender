@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Employee Attendene</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Employee Attendence</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->

                <!-- /.row -->
                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <section class="col-md-12">
                        <!-- Custom tabs (Charts with tabs)-->


                        <div class="card">
                            <div class="card-header">
                                <h3>Employee Attendence Details

                                    <a class="btn btn-success float-right btn-sm" href="{{route('employees.attendence.view')}}"><i class="fa fa-list"></i>Employee Attendence List</a>
                                </h3>

                            </div><!-- /.card-header -->
                            <div class="card-body">

                                <table id="example1" class="table table-bordered table-striped">

                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>ID NO</th>
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>Attend Status</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($details as $key=>$value)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$value['user']['id_no']}}</td>
                                            <td>{{$value['user']['name']}}</td>
                                            <td>{{date('d-m-yy',strtotime($value->date))}}</td>
                                            <td>{{$value->attend_status}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>


                            </div><!-- /.card-body -->
                        </div>



                    </section>

                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>

@endsection