@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Assign Subject</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Assign Subject</li>
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
                                <h3>Assign Subject Details

                                    <a class="btn btn-success float-right btn-sm" href="{{route('setups.assign.subject.view')}}"><i class="fa fa-list"></i>Assign Subject List</a>
                                </h3>

                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <h3><strong>Class Name :</strong>{{$editData['0']['student_class']['name']}}</h3>
                                <table  class="table table-bordered table-hover">

                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Subject</th>
                                        <th>Full Mark</th>
                                        <th>Pass Mark</th>
                                        <th>Subjective</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($editData as $key=>$value)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$value['subject']['name']}}</td>
                                            <td>{{$value->full_mark}}</td>
                                            <td>{{$value->pass_mark}}</td>
                                            <td>{{$value->subjective_mark}}</td>

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