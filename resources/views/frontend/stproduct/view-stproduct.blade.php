@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Employee</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Employee</li>
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
                                <h3>Employee List

                                    <a class="btn btn-success float-right btn-sm" href="{{route('dashboard')}}"><i class="fa fa-plus-circle"></i>Add Product</a>
                                </h3>

                            </div><!-- /.card-header -->
                            <div class="card-body">

                                <table id="example1" class="table table-bordered table-hover">

                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Product Name</th>
                                        <th>User Name</th>
                                        <th>Organization</th>
                                        <th>Brand Name</th>
                                        <th>Orgin Name</th>
                                        <th>Unit Name</th>
                                        <th>Pack Size</th>
                                        <th>Net Price</th>

                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($stproducts as $key => $data)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{($data->product_name)}}</td>
                                            <td>{{($data->user_name)}}</td>
                                            <td>{{($data->organization)}}</td>
                                            <td>{{($data->brand)}}</td>
                                            <td>{{($data->orgin)}}</td>
                                            <td>{{($data->unit)}}</td>
                                            <td>{{($data->pack_size)}}</td>
                                            <td>{{($data->net_price)}}</td>
                                            <td>
                                                <a title="Edit" class="btn btn-sm btn-primary" href="{{route('dashboard.edit', ['id' => $data->stp_id])}}"><i class="fa fa-edit"></i></a>
                                                <a title="Details" target="_blank" class="btn btn-sm btn-success" href=""><i class="fa fa-eye"></i></a>
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