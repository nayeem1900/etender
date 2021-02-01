<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Model\Stproduct;
use App\Model\Tproduct;
use Illuminate\Http\Request;
use Auth;
class StproductController extends Controller
{
   /* public function store(Request $request){

        $countClass=count($request->tprocuct_id);

        if($countClass != Null) {
            for ($i = 0; $i < $countClass; $i++) {

                $product = new Stproduct();
                $product->tproduct_id = $request->tproduct_id[$i];
                $product->brand = $request->brand[$i];
                $product->orgin = $request->orgin[$i];
                $product->unit = $request->unit[$i];
                $product->pack_size = $request->pack_size[$i];
                $product->net_price = $request->net_price[$i];
                $product->created_by = Auth::user()->id;
                $product->save();

            }
        }

        return redirect()->route('dashboard')->with('success','Product saved');
    }*/




}
