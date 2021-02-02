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
use App\User;
class DashboardController extends Controller
{

  public function view(){
      $data['allData']=User::where('usertype','supplier')->get();

      $data['tproducts']=Tproduct::all();
      $data['suppliers']=Supplier::all();
      $data['units']=Unit::all();
      $data['categories']=Category::all();
    $data['stproducts']=Stproduct::all();
      return view('frontend.stproduct.view-stproduct',$data);



  }


    public function dashboard(){
/*dd('ok');*/
        $data['tproducts']=Tproduct::all();
        $data['suppliers']=Supplier::all();
        $data['units']=Unit::all();
        $data['categories']=Category::all();

        return view('frontend.product',$data);

}


    public function store(Request $request){


        $countClass=count($request->tproduct_id);

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
    }



}
