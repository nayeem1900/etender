@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Product</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Fee Amount</li>
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
                                    <h3> Edit Fee Amount
                                        @else
                                            Add Fee Amount
                                        @endif

                                        <a class="btn btn-success float-right btn-sm" href="{{route('dashboard.view')}}"><i class="fa fa-list"></i>View Product</a>
                                    </h3>


                            </div><!-- /.card-header -->
                            <div class="card-body" >
                                <form method="POST" action="{{route('dashboard.store')}}" enctype="multipart/form-data" id="myForm" name="myForm">
                                    @csrf
                                    <div class="add_item">
                                        <div class="form-row">

                                            <div class="form-group row">
                                                              <label>Product Name</label>
                                                <div class="col-md-10">
                                                    <select name="tproduct_id[]"class="form-control tproduct_id" data-id="pdqty" id="">
                                                        <option value="">Select Product</option>
                                                        @foreach($tproducts as $tproduct)
                                                            <option value="{{$tproduct->id}}">{{$tproduct->name}}</option>
                                                        @endforeach
                                                    </select>

                                                </div>
                                            </div>


                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-3">
                                                <label for="name[]">Brand Name <font style="color: red">*</font></label>
                                                <input type="text" name="brand[]"  class="form-control form-control-sm"id="brand">

                                            </div>
                                            <div class="col-md-3">
                                                <label for="name">Orgin Name <font style="color: red">*</font></label>
                                                <input type="text" name="orgin[]"  class="form-control form-control-sm"id="orgin">


                                            </div>

                                            <div class="col-md-3">
                                                <label for="name">Unit Name <font style="color: red">*</font></label>
                                                <input type="text" name="unit[]" value="pcs" readonly class="form-control form-control-sm"id="unit">

                                            </div>
                                            <div class="col-md-3">
                                                <label for="name">Unit Price <font style="color: red">*</font></label>
                                                <input type="text" name="unit_price[]"  class="form-control form-control-sm" id="unit_p">

                                            </div>


                                            <div class="col-md-3">
                                                <label for="name">Pack Size <font style="color: red">*</font></label>
                                                <input type="text" name="pack_size[]"  class="form-control form-control-sm"id="pack_size">

                                            </div>
                                            <div class="col-md-3">
                                                <label for="name">Total Quantity <font style="color: red">*</font></label>
                                                <input type="text" name="total_qty[]" readonly value="0" id="pdqty" >

                                            </div>

                                            <div class="col-md-3">
                                                <label for="name">Total Price <font style="color: red">*</font></label>
                                                <input type="text" name="total_price[]"  class="form-control form-control-sm"id="total_p">

                                            </div>


                                            <div class="form-group clo-md-1" style="padding-top:30px;">
                                                <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i></span>
                                            </div>
                                        </div>


                                    </div>

                                    <button type="submit" class="btn btn-primary">

                                        {{(@$editData)?'Update':'Submit'}}

                                    </button>



                                </form>







                            </div><!-- /.card-body -->
                        </div>



                    </section>

                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>

    <div style="visibility: hidden">
        <div class="whole_extra_item_add" id="whole_extra_item_add">
            <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">

                <div class="form-row">

                    <div class="form-group col-md-5">
                        <label>Product Name</label>
                        <select name="tproduct_id[]"class="form-control tproduct_id pdqty_id" data-id="pdqty">
                            <option value="">Select Product</option>
                            @foreach($tproducts as $tproduct)
                                <option value="{{$tproduct->id}}">{{$tproduct->name}}</option>
                            @endforeach
                        </select>

                    </div>


                    <div class="form-row">
                        <div class="col-md-3">
                            <label for="name">Brand Name <font style="color: red">*</font></label>
                            <input type="text" name="brand[]"  class="form-control form-control-sm"id="brand">

                        </div>
                        <div class="col-md-3">
                            <label for="name">Orgin Name <font style="color: red">*</font></label>
                            <input type="text" name="orgin[]"  class="form-control form-control-sm"id="orgin">


                        </div>

                        <div class="col-md-3">
                            <label for="name">Unit Name <font style="color: red">*</font></label>
                            <input type="text" name="unit[]" value="pcs" readonly class="form-control form-control-sm"id="unit">

                        </div>
                        <div class="col-md-3">
                            <label for="name">Unit Price <font style="color: red">*</font></label>
                            <input type="text" name="unit_price[]"  class="form-control form-control-sm unit_price"id="unit_p">

                        </div>

                        <div class="col-md-3">
                            <label for="name">Pack Size <font style="color: red">*</font></label>
                            <input type="text" name="pack_size[]"  class="form-control form-control-sm"id="pack_size">

                        </div>

                        <div class="col-md-3">
                            <label for="name">Total Quantity <font style="color: red">*</font></label>
                            <input type="text" name="total_qty[]" readonly class="pdqty"  value="0" id="pdqty">

                        </div>

                        <div class="col-md-3">
                            <label for="name">Total Price <font style="color: red">*</font></label>
                            <input type="text" name="total_price[]"  class="form-control form-control-sm "id="total_p">

                        </div>


                        <div class="form-group clo-md-1" style="padding-top:30px;">
                            <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i></span>
                        </div>
                    </div>




                    <div class="form-group col-md-1" style="padding-top: 30px">

                        <div class="form-row">

                            <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i> </span>
                            <span class="btn btn-danger removeeventmore"><i class="fa fa-minus-circle"></i> </span>
                        </div>
                    </div>

                </div>
            </div>

        </div>


    </div>

{{--<script>
$(document).ready()(function () {

  $("#pdqty,#unit_p").keyup(function () {

      var qty_id=$(this).data('id');
      var x=number($("#pdqty").val());
      var x=number($("#unit_p").val());
      var total_p=x*y;
      $('#total_p').val(total_p);
  });

});
    



</script>--}}

    <script type="text/javascript">
        $(document).ready(function () {

            /*$( "#pdqty" ).change(function() {
                multiply();
            });
*/
            $( "#unit_p" ).change(function() {
                multiply();
            });

            function multiply() {



               var total_qty= $("#pdqty").val();
                var unit_price=$("#unit_p").val();

               var total_price=total_qty*unit_price;
                $("#total_p").val(total_price);


            }

        });


    </script>

    {{-- extra add item --}}

    <script type="text/javascript">




        $(document).ready(function(){



            //var no=0;
            //$('.tproduct_id').on('change',function(){
            $('body').on('change', '.tproduct_id', function() {
                var productid=$(this).val();
                var qty_id=$(this).data('id');
                //alert(qty_id);
                $.ajax({
                    type: "GET",
                    url: "<?= URL::to('show-items-qty'); ?>/" + productid ,
                    dataType: "JSON",
                    data: {}, //expect html to be returned
                    success: function (data) {
                        $("#"+qty_id).val(data);
                    }
                });
                //alert(productid);
            });
            var counter = 0;
            $(document).on("click",".addeventmore",function(){
                var qty_add_cls='pdqty_'+counter;
                $(".pdqty_id").attr('data-id',"pdqty_"+counter);
                $(".pdqty").attr('id','pdqty_'+counter);
                var whole_extra_item_add=$("#whole_extra_item_add").html();
                $(this).closest(".add_item").append(whole_extra_item_add);
                $("#"+qty_add_cls).removeClass('pdqty');
                counter++;
            });
            $(document).on("click",".removeeventmore",function(event){
                $(this).closest("#delete_whole_extra_item_add").remove();
                counter -= 1;
            });
        });


    </script>



    {{--validation--}}
    <script type="text/javascript">
        $(document).ready(function () {


            $('#myForm').validate({
                rules: {
                    "tproduct_id": {
                        required: true,
                    },
                    "brand": {
                        required: true,

                    },
                    "orgin": {
                        required: true,

                    },
                    "unit": {
                        required: true,

                    },
                    "pack_size": {
                        required: true,

                    },
                    "net_price": {
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


    {{--product show--}}




@endsection