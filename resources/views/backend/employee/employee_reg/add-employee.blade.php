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
                <div class="row" >
                    <!-- Left col -->
                    <section class="col-md-12">
                        <!-- Custom tabs (Charts with tabs)-->


                        <div class="card">
                            <div class="card-header">

                                @if(isset($editData))
                                    <h3> Edit Employee
                                        @else
                                            Add Employee
                                        @endif

                                        <a class="btn btn-success float-right btn-sm" href="{{route('employees.reg.view')}}"><i class="fa fa-list"></i>Employee List</a>
                                    </h3>


                            </div><!-- /.card-header -->
                            <div class="card-body" >



                                <form method="POST" action="{{(@$editData)?route('employees.reg.update',$editData->id):route('employees.reg.store')}}" id="myForm" enctype="multipart/form-data" >
                                    @csrf


                                    <div class="form-row ">

                                        <div class="col-md-4">
                                            <label>Employee Name  <font style="color: red">*</font></label>
                                            <input type="text" name="name" value="{{@$editData->name}}" class="form-control form-control-sm"id="name">

                                        </div>

                                        <div class="col-md-4">
                                            <label>Father's Name <font style="color: red">*</font></label>
                                            <input type="text" name="fname" value="{{@$editData->fname}}" class="form-control form-control-sm"id="fname">

                                        </div>
                                        <div class="col-md-4">
                                            <label>Mother's Name <font style="color: red">*</font></label>
                                            <input type="text" name="mname" value="{{@$editData->mname}}" class="form-control form-control-sm"id="mname">

                                        </div>
                                        <div class="col-md-4">
                                            <label>Mobile No <font style="color: red">*</font></label>
                                            <input type="text" name="mobile" value="{{@$editData->mobile}}" class="form-control form-control-sm"id="mobile">

                                        </div>
                                        <div class="col-md-4">
                                            <label>Address <font style="color: red">*</font></label>
                                            <input type="text" name="address" value="{{@$editData->address}}" class="form-control form-control-sm"id="address">

                                        </div>
                                        <div class="col-md-4">
                                            <label>Gender  <font style="color: red">*</font></label>
                                            <select name="gender" class="form-control form-control-sm">
                                                <option value="">Select Gender</option>
                                                <option value="male" {{(@$editData->gender=='male')?"selected":''}}>Male</option>
                                                <option value="female" {{(@$editData->gender=='female')?"selected":''}}>Female</option>
                                                <option value="other" {{(@$editData->gender=='other')?"selected":''}}>Other</option>

                                            </select>

                                        </div>
                                        <div class="col-md-4">
                                            <label>Relegious <font style="color: red">*</font></label>
                                            <select name="religion" class="form-control form-control-sm">
                                                <option value="">Select Relegion</option>
                                                <option value="islam" {{(@$editData->religion=='islam')?"selected":''}}>Islam</option>
                                                <option value="hindu" {{(@$editData->religion=='hindu')?"selected":''}}>Hindu</option>
                                                <option value="buddist" {{(@$editData->religion=='buddist')?"selected":''}}>Buddist</option>
                                                <option value="christan" {{(@$editData->religion=='christan')?"selected":''}}>Christan</option>
                                                <option value="jewes" {{(@$editData->religion=='jewes')?"selected":''}}>Jewes</option>
                                                <option value="other" {{(@$editData->religion=='other')?"selected":''}}>Other</option>

                                            </select>

                                        </div>
                                        <div class="col-md-4">
                                            <label>Date of Birth <font style="color: red">*</font></label>
                                            <input type="date" name="dob" value="{{@$editData->dob}}" class="form-control form-control-sm singledatepicker" autocomplete="off" id="dob">

                                        </div>
                                        <div class="col-md-4">
                                            <label>Designation <font style="color: red">*</font></label>
                                            <select name="designation_id" class="form-control form-control-sm">
                                                <option value="">Select Designation</option>
                                                @foreach($designations as $designation)
                                                    <option value="{{$designation->id}}"{{(@$editData->designation_id==$designation->id)?"selected":""}}>{{$designation->name}} </option>

                                                @endforeach

                                            </select>

                                        </div>
                                        @if(!@$editData)
                                        <div class="col-md-3">
                                            <label>Join of Date <font style="color: red">*</font></label>
                                            <input type="date" name="join_date" value="{{@$editData->join_date}}" class="form-control form-control-sm singledatepicker" autocomplete="off" id="dob">

                                        </div>


                                        <div class="col-md-3">
                                            <label>Salary <font style="color: red">*</font></label>
                                            <input type="text" name="salary" value="{{@$editData->salary}}" class="form-control form-control-sm" autocomplete="off">

                                        </div>
                                        @endif





                                        <div class="col-md-3">
                                            <label>Image</label>
                                            <input type="file" name="image" class="form-control form-control-sm" id="image">

                                        </div>
                                        <div class="col-md-3">
                                            <img id="showImage" src="{{(!empty($editData->image))?url('upload/employee_images/'.$editData->image):url('upload/no_img.png')}}" style="width:100px;height:110px;border:1px solid#000;">

                                        </div>



                                    </div>



                                    <div class="form-group col-md-6"style="padding-top:30px;">
                                        <button type="submit" class="btn btn-primary btn-sm">

                                            {{(@$editData)?'Update':'Submit'}}

                                        </button>

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
                    "fname": {
                        required: true,
                    },
                    "mname": {
                        required: true,

                    },
                    "mobile": {
                        required: true,

                    },
                    "address": {
                        required: true,

                    },
                    "gender": {
                        required: true,

                    },
                    "religion": {
                        required: true,

                    },
                    "dob": {
                        required: true,

                    },
                    "salary": {
                        required: true,

                    },

                    "designation_id": {
                        required: true,

                    },
                    "join_date": {
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