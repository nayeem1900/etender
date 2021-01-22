@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Password</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Password</li>
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
                                <h3>Edit Password


                                </h3>

                            </div><!-- /.card-header -->
                            <div class="card-body">

                                <form method="POST" action="{{route('profiles.password.update')}}">
                                    @csrf
                                    @include('backend.layouts.message')


                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Current Password') }}</label>

                                        <div class="col-md-4">
                                            <input id="current_password" type="password" class="form-control @error('password') is-invalid @enderror" name="current_password" >


                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="new_password" class="col-md-4 col-form-label text-md-right">{{ __('New Password') }}</label>

                                        <div class="col-md-4">
                                            <input id="new_password" type="password" class="form-control @error('password') is-invalid @enderror" name="new_password" >


                                        </div>
                                    </div>




                                    <div class="form-group row mb-0">
                                        <div class="col-md-4 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Update') }}
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







@endsection