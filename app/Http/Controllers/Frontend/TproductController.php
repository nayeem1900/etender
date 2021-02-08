<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Tproduct;
use Illuminate\Http\Request;
use Auth;
class TproductController extends Controller
{
    public function view(){
        $allData=Tproduct::all();
        return view('frontend.tender_product.tview-product',compact('allData'));
    }

    public function add(){


        return view('frontend.tender_product.tadd-product');
    }

    public function store(Request $request){

        $product =new Tproduct();

        $product->name=$request->name;
        $product->total_qty=$request->total_qty;
        $product->created_by=Auth::user()->id;
        $product->save();
        return redirect()->route('tproducts.view')->with('success','Product saved');
    }
    public function edit($id){

        $data['editData']=Tproduct::find($id);


        return view('frontend.tender_product.tedit-product',$data);

    }

    public function update(Request $request, $id){


        $product =Tproduct::find($id);

        $product->name=$request->name;
        $product->total_qty=$request->total_qty;
        $product->updated_by=Auth::user()->id;
        $product->save();
        return redirect()->route('tproducts.view')->with('success','Product Updated');

    }

    public function delete($id){
        $product=Tproduct::find($id);
        $product->delete();
        return redirect()->route('tproducts.view')->with('Deleted','Product Deleted Successfully');


    }


}
