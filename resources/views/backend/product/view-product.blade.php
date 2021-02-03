@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Product</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Product</li>
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
                                <h3>Supplier List

                                    <a class="btn btn-success float-right btn-sm" href="{{route('products.add')}}"><i class="fa fa-plus-circle"></i> Add Product</a>
                                </h3>

                            </div><!-- /.card-header -->
                            <div class="card-body">

                                <table id="example1" class="table table-bordered table-hover">

                                    <thead>
                                    <tr>
                                        <th>SL.</th>
                                        <th>Supplier Name</th>
                                        <th>Category</th>
                                        <th>Name</th>
                                        <th>Unit</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($allData as $key=>$product)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$product['supplier']['name']}}</td>
                                            <td>
                                                    <input type="text" name="pack_size[]">
                                            </td>
                                            <td>{{$product['category']['name']}}</td>
                                            <td>{{($product->name)}}</td>
                                            <td>{{$product['unit']['name']}}</td>


                                            <td>
                                                <a title="Edit" class="btn btn-sm btn-primary" href="{{route('products.edit',$product->id)}}"><i class="fa fa-edit"></i></a>

                                                <form action="{{route('products.delete',$product->id)}}" method="post">
                                                    @csrf
                                                    <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                                </form>
{{--                                                <a title="Delete" class="btn btn-sm btn-danger" href="{{route('products.delete',$product->id)}}"><i class="fa fa-trash"></i></a>--}}


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