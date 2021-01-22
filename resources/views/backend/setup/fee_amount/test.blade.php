
<script type="text/javascript">


scrypt type="text/javascript">

    $(document).ready(function(){

    var counter = 0;
    $(document).on("click",".addeventmore",function(){
    var whole_extra_item_add=$("#whole_extra_item_add").html();
    $(this)closest(".add_item").append(whole_extra_item_add);
    counter++;
    });
    $(document).on("click",".removeeventmore",function(event){
    $(this)closest("delete_whole_extra_item_add").remove();
    counter -= 1;
    });
    });
</scrypt>




<a title="Edit" class="btn btn-sm btn-primary" href="{{route('setups.fee.amount.edit',$value->fee_category_id)}}"><i class="fa fa-edit"></i></a>