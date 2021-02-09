<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | DataTables</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>



    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('backend/admin_panel/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{asset('backend/admin_panel/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('backend/admin_panel/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('bacekend/admin_panel/plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('backend/admin_panel/dist/css/adminlte.min.css')}}">
    <!-- Custom DatePicker CSS -->
    <link rel="stylesheet" href="{{asset('backend/admin_panel/dist/css/daterangepicker.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('backend/admin_panel/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('backene/admin_panel/plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('backend/admin_panel/plugins/summernote/summernote-bs4.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="{{asset('backend/admin_panel/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!--sweetalert --->
    <script src="{{asset('backend/sweetalert/sweetalert.js')}}"></script>
    <link href="{{asset('backend/sweetalert/sweetalert.cs')}}" rel="stylesheet" type="text/css">

    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="{{asset('backend/auto_calc/dist/jautocalc.js')}}"></script>

    <link rel="stylesheet" type="text/css" media="screen" href="css/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/trirand/ui.jqgrid.css" />

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="../../index3.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">




                    <!-- Font Awesome -->
                    <link rel="stylesheet" href="{{asset('backend/admin_panel/plugins/fontawesome-free/css/all.min.css')}}">
                    <!-- Ionicons -->
                    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
                    <!-- Tempusdominus Bbootstrap 4 -->
                    <link rel="stylesheet" href="{{asset('backend/admin_panel/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
                    <!-- iCheck -->
                    <link rel="stylesheet" href="{{asset('backend/admin_panel/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
                    <!-- JQVMap -->
                    <link rel="stylesheet" href="{{asset('bacekend/admin_panel/plugins/jqvmap/jqvmap.min.css')}}">
                    <!-- Theme style -->
                    <link rel="stylesheet" href="{{asset('backend/admin_panel/dist/css/adminlte.min.css')}}">
                    <!-- Custom DatePicker CSS -->
                    <link rel="stylesheet" href="{{asset('backend/admin_panel/dist/css/daterangepicker.css')}}">
                    <!-- overlayScrollbars -->
                    <link rel="stylesheet" href="{{asset('backend/admin_panel/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
                    <!-- Daterange picker -->
                    <link rel="stylesheet" href="{{asset('backene/admin_panel/plugins/daterangepicker/daterangepicker.css')}}">
                    <!-- summernote -->
                    <link rel="stylesheet" href="{{asset('backend/admin_panel/plugins/summernote/summernote-bs4.css')}}">
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
                    <script src="{{asset('backend/admin_panel/plugins/jquery/jquery.min.js')}}"></script>
                    <!-- Google Font: Source Sans Pro -->
                    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
                    <!--sweetalert --->
                    <script src="{{asset('backend/sweetalert/sweetalert.js')}}"></script>
                    <link href="{{asset('backend/sweetalert/sweetalert.cs')}}" rel="stylesheet" type="text/css">


                    <link rel="stylesheet" type="text/css" media="screen" href="css/jquery-ui.css" />
                    <link rel="stylesheet" type="text/css" media="screen" href="css/trirand/ui.jqgrid.css" />
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <!-- Messages Dropdown Menu -->

            <!-- Notifications Dropdown Menu -->


            <li class="nav-item">
                Logout
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>DataTables</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">DataTables</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">


                        <!-- /.card-header -->

                        <!-- /.card-body -->

                        <!-- /.card -->

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">DataTable with default features</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body" form name="datatable">
                                <table id="datatable" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Product Name</th>

                                        <th>Brand Name</th>
                                        <th>Orgin Name</th>
                                        <th>Unit Name</th>
                                        <th>Pack Size</th>
                                        <th>Net Price</th>
                                        <th>Total Price</th>

                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                        </td>
                                        <td><input type="text" name="brand" value=""class="form-control-sm">
                                        </td>
                                        <td><input type="text" name="orgin" value=""class="form-control-sm">
                                        </td>
                                        <td><input type="text" name="unit" value=""class="form-control-sm">
                                        </td>
                                        <td><input type="text" name="pack_size" value=""class="form-control-sm">
                                        </td>
                                        <td><input type="text" name="net_price" value=""class="form-control-sm">
                                        </td>
                                        <td><input type="text" name="total_price" value="" jAutoCalc="{pack_size} * {net_price}"></td>


                                        <td>
                                            <a title="Edit" class="btn btn-sm btn-primary" href=""><i class="fa fa-edit"></i></a>
                                            <a title="Add" class="btn btn-sm btn-primary" name="add" id="add" href=""><i class="fa fa-circle"></i></a>
                                            <button type="button" name="save" id="save">Save</button>
                                            <form action="" method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                            {{--                                                <a title="Delete" class="btn btn-sm btn-danger" href="{{route('products.delete',$product->id)}}"><i class="fa fa-trash"></i></a>--}}


                                        </td>

                                    </tr>







                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th><button type="submit" name="save" id="save">Save</button> </th>
                                        <th>Browser</th>
                                        <th>Platform(s)</th>
                                        <th>Engine version</th>
                                        <th>CSS grade</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div><br/>
                            <div id="inserted_data_item"></div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.1.0-rc
        </div>
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('public/backend/admin_panel/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('backend/admin_panel/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- DataTables -->
<script src="{{asset('backend/admin_panel/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/admin_panel/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('backend/admin_panel/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('backend/admin_panel/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>

<!-- ChartJS -->
<script src="{{asset('backend/admin_panel/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('backend/admin_panel/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('backend/admin_panel/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('backend/admin_panel/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('backend/admin_panel/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('backend/admin_panel/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('backend/admin_panel/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('backend/admin_panel/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('backend/admin_panel/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('backend/admin_panel/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('backend/admin_panel/dist/js/adminlte.js')}}"></script>

<!-- Custom Date Picker -->
<script src="{{asset('backend/admin_panel/dist/js/daterangepicker.js')}}"></script>
<script src="{{asset('backend/admin_panel/dist/js/locales.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('backend/admin_panel/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('backend/admin_panel/dist/js/demo.js')}}"></script>

<!-- jquery-validation -->
<script src="{{asset('backend/admin_panel/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('backend/admin_panel/plugins/jquery-validation/additional-methods.min.js')}}"></script>
{{-- handlebars--}}
<script src="{{asset('backend/js/handlebars.min-v4.7.6.js')}}"></script>
{{-- Notyfy JS--}}
<script src="{{asset('backend/js/notify.min.js')}}"></script>
<script src="{{asset('backend/plugins/jquery/jquery.js/jquery.min.js')}}"></script>
{{--<script src="js/jquery.min.js" type="text/javascript"></script>--}}
{{--<script src="js/jquery-ui.min.js" type="text/javascript"></script>--}}
<script src="{{asset('backend/plugins/jquery-ui/jquery-ui.js/jquery-ui.min.js')}}"></script>

<script src="js/trirand/i18n/grid.locale-en.js" type="text/javascript"></script>
<script src="js/trirand/jquery.jqGrid.min.js" type="text/javascript"></script>

<!-- Page specific script -->
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>

{{--<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>--}}
<script type="text/javascript">

    $(function(){
        $('.singledatepicker').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                autoUpdateInput: false,
                autoApply: true,
                locale: {
                    format: 'DD-MM-YYYY',
                    daysofWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                    firstDay: 0
                },
                minDate: '01/01/1930',
            },
            function (start) {
                this.element.val(start.format('DD-MM-YYYY'));
                this.element.parent().removeClass('has-error');

            },
            function (chosen_date) {
                this.element.val(chosen_date.format('DD-MM-YYYY'));

            });
        $('.singledatepicker').on('apply.daterangepicker',function (ev,picker) {
            $(this).val(picker.startDate.found('DD-MM-YYYY'));
            $(this).trigger('change');


        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {

        $(document).on('click', '#delete', function () {


            var actionTo = $(this).attr('href');
            var token = $(this).attr('data-token');
            var id = $(this).attr('data-id');

            swal({

                    title: "Are You Sure?",
                    type: "success",
                    showCancelButton: true,
                    conffirmButtonClass: 'btn-danger',
                    conffirmButtonText: 'Yes',
                    cancelButtonText: 'No',
                    closeOnConfirm: false,
                    closeOnCancel: false

                },

                function (isConfirm) {
                    if (isConfirm) {


                        $.ajax({
                            url: actionTo,
                            type: 'post',
                            data: {id: id, _token: token},
                            success: function (data) {

                                swal({
                                        title: "Deleted!",
                                        type: "success"
                                    },
                                    function (isConfirm) {
                                        if (isConfirm) {

                                            $('.' + id).fadeOut();
                                        }

                                    });


                            }

                        });
                    } else {
                        swal("Cancelled", "", "error");
                    }


                });
            return false;

        });
    });

</script>


</body>
</html>

<script>

$(document).ready(function(){
    var count=1;
    $('#add').click(function () {
        count=count+1;
        var html_code="<tr id='row"+count+"'>";
        html_code+="<td>"
    });
});

</script>
