@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Employee Salary</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Salary</li>
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
                <div class="row" >
                    <!-- Left col -->
                    <section class="col-md-12">
                        <!-- Custom tabs (Charts with tabs)-->


                        <div class="card">
                            <div class="card-header">

                                Employee Salary Details Info


                                <a class="btn btn-success float-right btn-sm" href="{{route('employees.salary.view')}}"><i class="fa fa-list"></i>Employee List</a>
                                </h3>


                            </div><!-- /.card-header -->
                            <div class="card-body" >
                                <strong>Employee Name:</strong>{{$details->name}},<strong>Employee Id:</strong>{{$details->id_no}}
                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Previous Salary</th>
                                        <th>Increment Salary</th>
                                        <th>Present Salary</th>
                                        <th>Effected Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($salary_log as $key=>$value)
                                    <tr>
                                        @if($key=="0")
                                            <td class="text-center" colspan="5"><strong>Joining Salary:</strong>{{$value->previous_salary}}</td>
                                        @else
                                        <td>{{$key+1}}</td>
                                        <td>{{$value->previous_salary}}</td>
                                        <td>{{$value->increment_salary}}</td>
                                        <td>{{$value->present_salary}}</td>
                                        <td>{{date('d-m-y',strtotime($value->effected_date))}}</td>
                                            @endif
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