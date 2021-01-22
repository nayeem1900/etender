@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Fee Category Amount</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Fee Amount</li>
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
                                <h3>Fee Amount List

                                    <a class="btn btn-success float-right btn-sm" href="{{route('setups.fee.amount.add')}}"><i class="fa fa-plus-circle"></i> Add Fee Amount</a>
                                </h3>

                            </div><!-- /.card-header -->
                            <div class="card-body">

                                <table id="example1" class="table table-bordered table-hover">

                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th> Fee Category</th>

                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($allData as $key=>$value)
                                        <tr class="{{$value->id}}">
                                            <td>{{$key+1}}</td>
                                            <td>{{$value['fee_category']['name']}}</td>

                                            <td>
                                                <a title="Details" class="btn btn-sm btn-success" href="{{route('setups.fee.amount.details',$value->fee_category_id)}}"><i class="fa fa-eye"></i></a>

                                                <a title="Edit" class="btn btn-sm btn-primary" href="{{route('setups.fee.amount.edit',$value->fee_category_id)}}"><i class="fa fa-edit"></i></a>


                                            </td>

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