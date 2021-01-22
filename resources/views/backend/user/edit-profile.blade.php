@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Profile</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Profile</li>
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
                                <h3>Edit Profile

                                    <a class="btn btn-success float-right btn-sm" href="{{route('profiles.view')}}"><i class="fa fa-list"></i>Your Profile</a>
                                </h3>

                            </div><!-- /.card-header -->
                            <div class="card-body" >






                                <form method="POST" action="{{route('profiles.update')}}"enctype="multipart/form-data" >
                                    @csrf
                                    @include('backend.layouts.message')

                                    <div class="form-group row">
                                        <label for="usertype" class="col-md-4 col-form-label text-md-right">{{ __('User Type') }}</label>

                                        <div class="col-md-4">

                                            <select name="usertype" id="usertype" class="form-control">
                                                <option value="">Select Role</option>
                                                <option value="Admin"{{($editData->usertype=="Admin")?"selected":""}}>Admin</option>
                                                <option value="User" {{($editData->usertype=="User")?"selected":""}}>User</option>

                                            </select>
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>


                                        <div class="col-md-4">
                                           <input name="name" value="{{$editData->name}}" id="name" type="text" class="form-control" required ="">
                                            <font style="color:red">{{($errors->has('name'))?($errors->first('name')): ''}}</font>


                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                        <div class="col-md-4">
                                            <input id="email" value="{{$editData->email}}" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  required autocomplete="email" autofocus>
                                            <font style="color:red">{{($errors->has('email'))?($errors->first('name')): ''}}</font>

                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="usertype" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                                        <div class="col-md-4">

                                            <select name="gender" id="gender" class="form-control">
                                                <option value="">Select Gender</option>
                                                <option value="Male"{{($editData->gender=="Male")?"selected":""}}>Male</option>
                                                <option value="Female" {{($editData->gender=="Female")?"selected":""}}>Female</option>
                                                <option value="Other" {{($editData->gender=="Other")?"selected":""}}>Other</option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                                        <div class="col-md-4">
                                            <input id="address" value="{{$editData->address}}" type="text" class="form-control @error('email') is-invalid @enderror" name="address"  required autocomplete="email" autofocus>
                                            <font style="color:red">{{($errors->has('email'))?($errors->first('name')): ''}}</font>

                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Mobile') }}</label>


                                        <div class="col-md-4">
                                            <input name="mobile" value="{{$editData->mobile}}" id="mobile" type="number" class="form-control" required ="">



                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>
                                        <div class="col-md-4">
                                        <input type="file" name="image" class="form-control"id="image">
                                        </div>
                                    </div>
                                    <div class="col-md-2">

                                        <img id="showImage" src="{{(!empty($editData->image))?url('upload/user_images/'.$editData->image):url('upload/no_img.png')}}" style="width:150px;height:160px;border:1px solid#000;">
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