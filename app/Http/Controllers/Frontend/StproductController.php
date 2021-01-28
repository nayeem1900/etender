<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Model\Stproduct;
use Illuminate\Http\Request;
use Auth;
class StproductController extends Controller
{
    public function store(Request $request){

        $product =new Stproduct();
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
