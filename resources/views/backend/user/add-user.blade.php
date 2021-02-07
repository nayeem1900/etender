@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage User</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">User</li>
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
                                <h3>Add User

                                    <a class="btn btn-success float-right btn-sm" href="{{route('users.view')}}"><i class="fa fa-list"></i>User List</a>
                                </h3>

                            </div><!-- /.card-header -->
                            <div class="card-body">

                                <form method="POST" action="{{route('users.store')}}" id="myForm">
                                    @csrf
                                    @include('backend.layouts.message')

                                    <div class="form-group row">
                                        <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('User Role') }}</label>

                                        <div class="col-md-4">

                                            <select name="role" id="role" class="form-control">
                                                <option value="">Select Role</option>
                                                <option value="Admin">Admin</option>
                                                <option value="Operator">Operator</option>

                                            </select>

                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>


                                        <div class="col-md-4">
                                            <input name="name" id="name" type="text" class="form-control" required ="">
                                            <font style="color:red">{{($errors->has('name'))?($errors->first('name')): ''}}</font>


                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="organization" class="col-md-4 col-form-label text-md-right">{{ __('Organization') }}</label>


                                        <div class="col-md-4">
                                            <input name="organization" id="organization" type="text" class="form-control" required ="">
                                            <font style="color:red">{{($errors->has('name'))?($errors->first('name')): ''}}</font>


                                        </div>
                                    </div>




                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                        <div class="col-md-4">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            <font style="color:red">{{($errors->has('email'))?($errors->first('name')): ''}}</font>

                                        </div>
                                    </div>





                                    <div class="form-group row mb-0">
                                        <div class="col-md-4 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Submit') }}
                                            </button>

                                        </div>
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
                    "role": {
                        required: true,
                    },
                    "name": {
                        required: true,

                    },
                    "password": {
                        required: true,
                        minlength:6,

                    },
                    "email": {
                        required: true,
                        email:true,

                    }
                },

                messages: {
                    name:{
                        required:'Please Enter User Name',
                    },
                    role:{
                        required:'Please Enter User Role',
                    },
                    email:{
                        required:'Please Enter User Email',
                    }


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