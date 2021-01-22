@extends('backend.layouts.master')

@section('content')

   <link rel="stylesheet"type="text/css" href="{{asset('backend/css/attend.css')}}">

   <style type="text/css">
       .switch-toggle{
           width: auto;
       }
       .switch-toggle label:not(.disabled){
           cursor: pointer;
       }
       .switch-candy a{
           border: 1px solid #333;
           border-radius: 3px;
           box-shadow: 0 1px 1px rgba(0,0,0,0.2),inset 0 1px 1px rgba(255,255,255,0.45);
           background-color: white;
           background-image: -webkit-linear-gradient(top,rgba(255,255,255,0.2),transparent);
           background-image: linear-gradient(to bottom,rgba(255,255,255,0.2),transparent);
       }
       .switch-toggle .switch-candy,.switch-light.switch-candy >span{
           background-color: #5a6268;
           border-radius: 3px;
           box-shadow: inset 0 2px 6px rgba(0,0,0,0.3),0 1px 0 rgba(255,255,255,0.2);
       }
   </style>






   <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Employee Attendence</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Attendence</li>
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
                                    <h3> Edit Employee Attendence
                                        @else
                                            Add Employee Attendence
                                        @endif

                                        <a class="btn btn-success float-right btn-sm" href="{{route('employees.attendence.view')}}"><i class="fa fa-list"></i>Employee Attendence List</a>
                                    </h3>


                            </div><!-- /.card-header -->
                            <form method="post" action="{{route('employees.attendence.store')}}" id="myForm">
                                @csrf
                                @if(isset($editData))
                                    <div class="card-body" >
                                        <div class="from-group col-md-4">
                                            <label class="control-label">Attendence Date</label>
                                            <input type="text" name="date" value="{{$editData['0']['date']}}" id="date" class="checkdate form-control form-control-sm " placeholder="Attendence"autocomplete="off" readonly>
                                        </div>
                                        <table class="table-sm table-bordered table-striped dt-responsive" style="width: 100%">
                                            <thead>
                                            <tr>
                                                <th rowspan="2" class="text-center" style="vertical-align: middle;">SL</th>
                                                <th rowspan="2" class="text-center" style="vertical-align: middle;">Employee Name</th>
                                                <th colspan="3" class="text-center" style="vertical-align: 25%;">Attendence Status</th>
                                            </tr>
                                            <tr>
                                                <th class="text-center btn present_all" style="display: table-cell; background-color: #114190;">Present</th>
                                                <th class="text-center btn leave_all" style="display: table-cell; background-color: #114190;">Leave</th>
                                                <th class="text-center btn absent_all" style="display: table-cell; background-color: #114190;">Absent</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($editData as $key=> $data)
                                                <tr id="div{{$data->id}}" class="text-center">
                                                    <input type="hidden" name="employee_id[]" value="{{$data->employee_id}}" class="employee_id">
                                                    <td>{{$key+1}}</td>
                                                    <td>{{$data['user']['name']}}</td>
                                                    <td colspan="3">
                                                        <div class="switch-toggle switch-3 switch-candy">
                                                            <input class="present" id="present{{$key}}" name="attend_status{{$key}}" value="present" type="radio" checked="checked"{{($data->attend_status=='present')?'checked':''}}/>
                                                            <label for="present{{$key}}">Present</label>
                                                            <input class="leave" id="leave{{$key}}" name="attend_status{{$key}}" value="leave" type="radio" {{($data->attend_status=='leave')?'checked':''}}/>
                                                            <label for="leave{{$key}}">Leave</label>
                                                            <input class="absent" id="absent{{$key}}" name="attend_status{{$key}}" value="absent" type="radio" {{($data->attend_status=='absent')?'checked':''}}/>
                                                            <label for="absent{{$key}}">Absent</label>
                                                            <a></a>
                                                        </div>

                                                    </td>

                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table><br/>
                                        <button type="submit" class="btn btn-success btn-sm">
                                            {{(@$editData)?'Update': 'Submit'}} </button>


                                    </div>
                                    @else
                                    <div class="card-body" >
                                        <div class="from-group col-md-4">
                                            <label class="control-label">Attendence Date</label>
                                            <input type="text" name="date" id="date" class="checkdate form-control form-control-sm singledatepicker" placeholder="Attendence"autocomplete="off">
                                        </div>
                                        <table class="table-sm table-bordered table-striped dt-responsive" style="width: 100%">
                                            <thead>
                                            <tr>
                                                <th rowspan="2" class="text-center" style="vertical-align: middle;">SL</th>
                                                <th rowspan="2" class="text-center" style="vertical-align: middle;">Employee Name</th>
                                                <th colspan="3" class="text-center" style="vertical-align: 25%;">Attendence Status</th>
                                            </tr>
                                            <tr>
                                                <th class="text-center btn present_all" style="display: table-cell; background-color: #114190;">Present</th>
                                                <th class="text-center btn leave_all" style="display: table-cell; background-color: #114190;">Leave</th>
                                                <th class="text-center btn absent_all" style="display: table-cell; background-color: #114190;">Absent</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($employees as $key=> $employee)
                                                <tr id="div{{$employee->id}}" class="text-center">
                                                    <input type="hidden" name="employee_id[]" value="{{$employee->id}}" class="employee_id">
                                                    <td>{{$key+1}}</td>
                                                    <td>{{$employee->name}}</td>
                                                    <td colspan="3">
                                                        <div class="switch-toggle switch-3 switch-candy">
                                                            <input class="present" id="present{{$key}}" name="attend_status{{$key}}" value="present" type="radio" checked="checked">
                                                            <label for="present{{$key}}">Present</label>
                                                            <input class="leave" id="leave{{$key}}" name="attend_status{{$key}}" value="leave" type="radio">
                                                            <label for="leave{{$key}}">Leave</label>
                                                            <input class="absent" id="absent{{$key}}" name="attend_status{{$key}}" value="absent" type="radio">
                                                            <label for="absent{{$key}}">Absent</label>
                                                            <a></a>
                                                        </div>

                                                    </td>

                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table><br/>
                                        <button type="submit" class="btn btn-success btn-sm">
                                            {{(@$editData)?'Update': 'Submit'}} </button>


                                    </div><!-- /.card-body -->
                                    @endif
                            </form>

                        </div>



                    </section>

                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>

    <script type="text/javascript">
$(document).on('click','.present',function () {
    $(this).parents('tr').find('.datetime').css('pointer-events', 'none').css('background-color', '#dee2e6').css('color', '#495057');
});
    $(document).on('click','.leave',function () {
        $(this).parents('tr').find('.datetime').css('pointer-events', '').css('background-color', '#dee2e6').css('color', '#495057');
    });

        $(document).on('click','.absent',function () {
            $(this).parents('tr').find('.datetime').css('pointer-events','none').css('background-color','#dee2e6').css('color','#495057');

    });

    </script>

    <script type="text/javascript">
$(document).on('click','.present_all',function () {
$("input[value=present]").prop('checked',true);
$('.datetime').css('pointer-events','none').css('background-color','#dee2e6').css('color','#495057');
});
$(document).on('click','.leave_all',function () {
    $("input[value=present]").prop('checked',true);
    $('.datetime').css('pointer-events','none').css('background-color','#dee2e6').css('color','#495057');
});
$(document).on('click','.absent_all',function () {
    $("input[value=present]").prop('checked',true);
    $('.datetime').css('pointer-events','none').css('background-color','#dee2e6').css('color','#495057');
});

    </script>

    <script type="text/javascript">
        $(document).ready(function () {


            $('#myForm').validate({
                rules: {
                    "date": {
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


    <script type="text/javascript">

        $(document).ready(function () {
            $(document).on('change','#leave_purpose_id',function () {
                var leave_purpose_id=$(this).val();
                if(leave_purpose_id=='0'){
                    $('#add_others').show();
                }else {
                    $('#add_others').hide();
                }

            })

        })

    </script>





@endsection