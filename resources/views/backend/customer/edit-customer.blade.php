@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Customer</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Customer</li>
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

                            <h3>Edit Customer
                                <a class="btn btn-success float-right btn-sm" href="{{route('customers.view')}}"><i class="fa fa-list"></i>Customer List</a>
                                </h3>


                            </div><!-- /.card-header -->
                            <div class="card-body" >



                                <form method="POST" action="{{route('customers.update',$editData->id)}}" id="myForm" enctype="multipart/form-data" >
                                    @csrf


                                    <div class="form-row ">

                                        <div class="col-md-4">
                                            <label> Name  <font style="color: red">*</font></label>
                                            <input type="text" name="name" value="{{$editData->name}}" class="form-control form-control-sm"id="name">

                                        </div>

                                        <div class="col-md-4">
                                            <label>Mobile no <font style="color: red">*</font></label>
                                            <input type="text" name="mobile_no" value="{{$editData->mobile_no}}" class="form-control form-control-sm"id="mobile_no">

                                        </div>
                                        <div class="col-md-4">
                                            <label>email <font style="color: red">*</font></label>
                                            <input type="text" name="email" value="{{$editData->email}}" class="form-control form-control-sm"id="email">

                                        </div>

                                        <div class="col-md-4">
                                            <label>Address <font style="color: red">*</font></label>
                                            <input type="text" name="address" value="{{$editData->address}}" class="form-control form-control-sm"id="address">

                                        </div>






                                    </div><br/>




                                    <div class=" form-group col-md-6">

                                        <input type="submit" value="update" class="btn btn-primary ">


                                        </input>
                                    </div>



                                </form>



                            </div><!-- /.card-body -->
                        </div>



                    </section>

                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>



    <script type="text/javascript">
        $(document).ready(function () {


            $('#myForm').validate({
                rules: {
                    "name": {
                        required: true,
                    },
                    "mobile_no": {
                        required: true,
                    },
                    "email": {
                        required: true,

                    },
                    "address": {
                        required: true,

                    }

                },

                messages: {


                },
                errorElement: 'span',
                errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>






@endsection