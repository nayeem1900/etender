<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">



    {{--Bootstrap--}}
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


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqgrid/5.5.3/css/ui.jqgrid-bootstrap-ui.min.css" integrity="sha512-Le5SZRnS7S4ArmiYClxIKwWLrs9SoHPyh+oQG7zSBbvm0QQosIoKLW6w7etCry7JlH4Zg4Yr54rWcHf9tq741g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqgrid/5.5.3/css/ui.jqgrid.min.css" integrity="sha512-nXAP22J2vO3IBDvBq7XJn5DQzGgyshIiHTrY2gnkvQViBUpBA5FEG3+I2isVK4eTVTur+L5jndD7rx4Sg2kJyw==" crossorigin="anonymous" />

</head>
<body class="hold-transition sidebar-mini layout-fixed">

<h2>Grid</h2>
<table id="list4"></table>
<!-- ./wrapper -->

<!-- jQuery -->


{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.js"></script>--}}

<!-- jQuery UI 1.11.4 -->
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

<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery-ui.min.js" type="text/javascript"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jqgrid/5.5.3/js/jquery.jqGrid.min.js" integrity="sha512-Fcw0fS8DZThGMakYO4Jqv3mQjON6lPJwazVb/dGVnT7r41V/pKc6Gy6IQnizRYYNwFRzM5fEVjbAFQ5/StRwUg==" crossorigin="anonymous"></script>

<script>

    $(document).ready(function () {

        function getData() {
            return $.ajax({
                url: "http://localhost:8081/ibfetender/public/fetch-data",
                method: "GET"
            });
        }

        var mydata = getData();

        $("#list4").jqGrid({
            datatype: "local",
            height: 250,
            colNames:['Inv No','Name'],
            colModel:[
                {name:'id',index:'id', width:60, sorttype:"int"},
                {name:'name',index:'name', width:100},
            ],
            multiselect: true,
            caption: "Manipulating Array Data"
        });

        for(var i = 0; i <= mydata.length; i++) {
            console.log(mydata[i]);
            jQuery("#list4").jqGrid('addRowData', i + 1, mydata[i]);
        }

    });



</script>


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

{{--imageshow scrypt--}}

<script type="text/javascript">
    $(document).ready(function(){

        $('#image').change(function(e){
            var reader=new FileReader();
            reader.onload=function (e) {

                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);

        });

    });


</script>


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
