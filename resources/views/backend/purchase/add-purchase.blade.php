@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Purchase</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Purchase</li>
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


                                        <a class="btn btn-success float-right btn-sm" href="{{route('purchase.view')}}"><i class="fa fa-list"></i>Purchase List</a>
                                    </h3>


                            </div><!-- /.card-header -->
                            <div class="card-body" >






                                    <div class="form-row ">

                                        <div class="col-md-4">
                                            <label > Date <font style="color: red">*</font></label>
                                            <input type="text" name="date" id="date" class="form-control singledatepicker" PLACEHOLDER="YYYY-MM-DD" readonly>

                                        </div>

                                        <div class="col-md-4">
                                            <label>Purchase No <font style="color: red">*</font></label>
                                            <input type="text" name="purchase_no" id="purchase_no" class="form-control " >

                                        </div>
                                        <div class="col-md-4">
                                            <label >Supplier Name <font style="color: red">*</font></label>
                                            <select name="supplier_id" id="supplier_id" class="form-control">
                                                <option value="">Select Supplier</option>
                                                @foreach($suppliers as $supplier)
                                                    <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                                                @endforeach

                                            </select>


                                        </div>
                                        <div class="col-md-4">
                                            <label >Category Name <font style="color: red">*</font></label>
                                            <select name="category_id" class="form-control" id="category_id">
                                                <option value="">Select Category</option>

                                            </select>

                                        </div>

                                        <div class="col-md-6">
                                            <label >Product Name <font style="color: red">*</font></label>
                                            <select name="product_id" class="form-control" id="product_id">
                                                <option value="">Select Product</option>

                                            </select>

                                        </div>

                        <div class="form-group col-md-2" style="padding-top: 30px;">
<i class="btn btn-primary btn-sm fa fa-plus-circle addeventmore">+ Add Item</i>

                        </div>




                                    </div><br/>




                                    <div class=" form-group col-md-6">

                                        <input type="submit" value="submit" class="btn btn-primary ">


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
$(function () {
    $(document).on('change','#supplier_id',function () {
        var supplier_id=$(this).val();
        $.ajax({
url:"{{route('get-category')}}",
            type:"GET",
            data:{supplier_id:supplier_id},
            success:function (data) {
                var html = '<option value="">Select Category </option>';
                $.each(data, function (key, v) {
html+='<option value="'+v.category_id+'">'+v.category.name+'</option>';

                });
         $('#category_id').html(html);
            }
        });
        
    });
    
});


    </script>





    <script type="text/javascript">
        $(document).ready(function () {


            $('#myForm').validate({
                rules: {
                    "name": {
                        required: true,
                    },
                    "unit_id": {
                        required: true,
                    },
                    "supplier_id": {
                        required: true,

                    },
                    "category_id": {
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