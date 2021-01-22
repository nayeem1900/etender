@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Purchase</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Purchase</li>
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
                                <h3>Purchase List

                                    <a class="btn btn-success float-right btn-sm" href="{{route('purchase.add')}}"><i class="fa fa-plus-circle"></i>Add Purchase</a>
                                </h3>

                            </div><!-- /.card-header -->
                            <div class="card-body">

                                <table id="example1" class="table table-bordered table-hover">

                                    <thead>
                                    <tr>

                                        <th>SL.</th>
                                        <th>Purchase No</th>
                                        <th>Date</th>
                                        <th>Product Name</th>
                                        <th>Unit</th>

                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($allData as $key=>$purchase)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$purchase->purchase_no}}</td>
                                            <td>{{$purchase->date}}</td>
                                            <td>{{$purchase['product']['name']}}</td>
                                            <td>{{$purchase['unit']['name']}}</td>



                                            <td>
                                                <a title="Edit" class="btn btn-sm btn-primary" href="{{route('purchase.edit',$purchase->id)}}"><i class="fa fa-edit"></i></a>
                                                <a title="Delete" class="btn btn-sm btn-danger" href="{{route('purchase.delete',$purchase->id)}}"><i class="fa fa-trash"></i></a>


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