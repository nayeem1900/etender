@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Students</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Student</li>
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
                                    <h3>Promotion Student
                                        @else
                                            Add Student
                                        @endif

                                        <a class="btn btn-success float-right btn-sm" href="{{route('students.registration.view')}}"><i class="fa fa-list"></i>Student List</a>
                                    </h3>


                            </div><!-- /.card-header -->
                            <div class="card-body" >



                                <form method="POST" action="{{route('students.registration.promotion.store',$editData->student_id)}}" id="myForm" enctype="multipart/form-data" >
                                    @csrf
                                    <input type="hidden"name="id"value="{{@$editData->id}}">

                                    <div class="form-row ">

                                        <div class="col-md-4">
                                            <label>Student Name  <font style="color: red">*</font></label>
                                            <input type="text" name="name" value="{{@$editData['student']['name']}}" class="form-control form-control-sm"id="name">

                                        </div>

                                        <div class="col-md-4">
                                            <label>Father's Name <font style="color: red">*</font></label>
                                            <input type="text" name="fname" value="{{@$editData['student']['fname']}}" class="form-control form-control-sm"id="fname">

                                        </div>
                                        <div class="col-md-4">
                                            <label>Mother's Name <font style="color: red">*</font></label>
                                            <input type="text" name="mname" value="{{@$editData['student']['mname']}}" class="form-control form-control-sm"id="mname">

                                        </div>
                                        <div class="col-md-4">
                                            <label>Mobile No <font style="color: red">*</font></label>
                                            <input type="text" name="mobile" value="{{@$editData['student']['mobile']}}" class="form-control form-control-sm"id="mobile">

                                        </div>
                                        <div class="col-md-4">
                                            <label>Address <font style="color: red">*</font></label>
                                            <input type="text" name="address" value="{{@$editData['student']['address']}}" class="form-control form-control-sm"id="address">

                                        </div>
                                        <div class="col-md-4">
                                            <label>Gender  <font style="color: red">*</font></label>
                                            <select name="gender" class="form-control form-control-sm">
                                                <option value="">Select Gender</option>
                                                <option value="male" {{(@$editData['student']['gender']=='male')?"selected":''}}>Male</option>
                                                <option value="female" {{(@$editData['student']['gender']=='female')?"selected":''}}>Feamle</option>
                                                <option value="other {{(@$editData['student']['gender']=='other')?"selected":''}}">Others</option>
                                            </select>

                                        </div>
                                        <div class="col-md-4">
                                            <label>Relegious <font style="color: red">*</font></label>
                                            <select name="religion" class="form-control form-control-sm">
                                                <option value="">Select Relegion</option>
                                                <option value="islam" {{(@$editData['student']['religion']=='islam')?"selected":''}}>Islam</option>
                                                <option value="hndu" {{(@$editData['student']['religion']=='hindu')?"selected":''}}>Hindu</option>
                                                <option value="buddist" {{(@$editData['student']['religion']=='buddist')?"selected":''}}>Buddist</option>
                                                <option value="christan"{{(@$editData['student']['religion']=='christan')?"selected":''}}>Christan</option>
                                                <option value="jewes"{{(@$editData['student']['religion']=='jewes')?"selected":''}}>Jewes</option>
                                                <option value="other"{{(@$editData['student']['religion']=='other')?"selected":''}}>Others</option>

                                            </select>

                                        </div>
                                        <div class="col-md-4">
                                            <label>Date of Birth <font style="color: red">*</font></label>
                                            <input type="date" name="dob" value="{{@$editData['student']['dob']}}" class="form-control form-control-sm singledatepicker" autocomplete="off" id="dob">

                                        </div>
                                        <div class="col-md-4">
                                            <label>Discount <font style="color: red">*</font></label>
                                            <input type="text" name="discount" value="{{@$editData['discount']['discount']}}" class="form-control form-control-sm" autocomplete="off">

                                        </div>


                                        <div class="col-md-4">
                                            <label>Year <font style="color: red">*</font></label>
                                            <select name="year_id" class="form-control form-control-sm">
                                                <option value="">Select Year</option>
                                                @foreach($years as $year)
                                                    <option value="{{$year->id}}"{{(@$editData->year_id==$year->id)?"selected":""}}>{{$year->name}} </option>

                                                @endforeach

                                            </select>

                                        </div>

                                        <div class="col-md-4">
                                            <label>Class <font style="color: red">*</font></label>
                                            <select name="class_id" class="form-control form-control-sm">
                                                <option value="">Select Class</option>
                                                @foreach($classes as $cls)
                                                    <option value="{{$cls->id}}"{{(@$editData->class_id==$cls->id)?"selected":""}}>{{$cls->name}} </option>

                                                @endforeach

                                            </select>

                                        </div>

                                        <div class="col-md-4">
                                            <label>Group</label>
                                            <select name="group_id" class="form-control form-control-sm">
                                                <option value="">Select Group</option>
                                                @foreach($groups as $grp)
                                                    <option value="{{$grp->id}}" {{(@$editData->group_id==$cls->id)?"selected":""}}>{{$grp->name}} </option>

                                                @endforeach

                                            </select>

                                        </div>
                                        <div class="col-md-4">
                                            <label>Shift</label>
                                            <select name="shift_id" class="form-control form-control-sm">
                                                <option value="">Select Group</option>
                                                @foreach($shifts as $shift)
                                                    <option value="{{$shift->id}}" {{(@$editData->shift_id==$shift->id)?"selected":""}}>{{$shift->name}} </option>

                                                @endforeach

                                            </select>

                                        </div>

                                        <div class="col-md-4">
                                            <label>Image</label>
                                            <input type="file" name="image" class="form-control form-control-sm" id="image">

                                        </div>
                                        <div class="col-md-4">
                                            <img id="showImage" src="{{(!empty($editData['student']['image']))?url('upload/student_images/'.$editData['student']['image']):url('upload/no_img.png')}}" style="width:100px;height:110px;border:1px solid#000;">

                                        </div>



                                    </div>



                                    <div class="form-group col-md-6"style="padding-top:30px;">
                                        <button type="submit" class="btn btn-primary btn-sm">

                                            {{(@$editData)?'Promotion':'Submit'}}

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
                    "discount": {
                        required: true,

                    },

                    "year_id": {
                        required: true,

                    },
                    "class_id": {
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