<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Auth;
use App\Model\Supplier;
use App\Model\Category;
use App\Model\Product;
use App\Model\Unit;
use PDF;
use App\Model\Purchase;
class DefaultController extends Controller
{
public function getcategory(Request $request){

    $supplier_id=$request->supplier_id;

  /*  $allcategory=Product::with(['category'])-> select('category_id')->where($supplier_id)->where('supplier_id',$supplier_id)->groupBy('category_id')->get();

    return response()->json($allcategory);*/

  $allcategory=Product::where('supplier_id',$supplier_id)->get();
    dd($allcategory);
}
}
