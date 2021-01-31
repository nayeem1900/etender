<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Tproduct;
use Illuminate\Http\Request;
use Auth;
use App\Model\Stproduct;
use App\Model\Supplier;
use App\Model\Unit;
use App\Model\Category;
class DashboardController extends Controller
{
    public function dashboard(){
/*dd('ok');*/
$data['tproducts']=Tproduct::all();
        $data['suppliers']=Supplier::all();
        $data['units']=Unit::all();
        $data['categories']=Category::all();

        return view('frontend.product',$data);

}


    public function store(Request $request){


        $product =new Stproduct();
        $product->tproduct_id = $request->tproduct_id;
        $product->brand = $request->brand;
        $product->orgin = $request->orgin;
        $product->unit = $request->unit;
        $product->pack_size = $request->pack_size;
        $product->net_price = $request->net_price;
        $product->created_by=Auth::user()->id;
        $product->save();
        return redirect()->route('supplier.login')->with('success','Product saved');
    }



}
