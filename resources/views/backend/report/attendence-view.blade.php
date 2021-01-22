@extends('backend.layouts.master')

@section('content')
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
                            <li class="breadcrumb-item active">Employee Attendence</li>
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
                                <h3>Select Criteria</h3>

                            </div><!-- /.card-header -->

                            <div class="card-body">
                                <form method="get" action="{{route('reports.attendence.get')}}" id="myForm" target="_blank">

                                    <div class="form-row">
                                        <div class="form-group col-md-3">

                                            <label for="employee_id">Employee</label>
                                            <select name="employee_id" id="employee_id" class="form-control select2bs4">
                                                <option value="">Select Employee</option>
                                                @foreach($employees as $employee)
                                                    <option value="{{$employee->id}}"> {{$employee->name}}</option>
                                                @endforeach
                                            </select>

                                        </div>




                                        <div class="form-group col-md-3">

                                            <label>Date</label>
                                            <input type="text" name="date" class="singledatepicker form-control"id="date" placeholder="DD-MM-YYYY" readonly>

                                        </div>

                                        <div class="form-group col-md-3">
                                            <button type="submit" class="btn btn-primary" name="search" style="padding-top: 25px;">Search</button>

                                        </div>


                                    </div>


                                </form>


                            </div>


                        </div>



                    </section>

                </div>

            </div>
        </section>
        <!-- /.content -->
        <script type="text/javascript">
            $(document).ready(function () {


                $('#myForm').validate({
                    rules: {
                        "employee_id": {
                            required: true,
                        },
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


    </div>

@endsection