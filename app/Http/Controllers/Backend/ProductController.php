<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\Product;
use App\Model\Supplier;
use App\Model\Unit;
use Illuminate\Http\Request;
use Auth;

class ProductController extends Controller
{
    public function view(){
        $allData=Product::all();
        return view('backend.product.view-product',compact('allData'));
    }

    public function add(){
        $data['suppliers']=Supplier::all();
        $data['units']=Unit::all();
        $data['categories']=Category::all();

        return view('backend.product.add-product',$data);
    }

    public function store(Request $request){

        $product =new Product();
        $product->supplier_id =$request->supplier_id;
        $product->unit_id=$request->unit_id;
        $product->category_id=$request->category_id;
        $product->name=$request->name;
        $product->quantity='0';
        $product->created_by=Auth::user()->id;
        $product->save();
        return redirect()->route('products.view')->with('success','Product saved');
    }
    public function edit($id){

        $data['editData']=Product::find($id);
        /*dd($editData);*/
        $data['suppliers']=Supplier::all();
        $data['units']=Unit::all();
        $data['categories']=Category::all();
        return view('backend.product.edit-product',$data);

    }

    public function update(Request $request, $id){


        $product =Product::find($id);
        $product->supplier_id =$request->supplier_id;
        $product->unit_id=$request->unit_id;
        $product->category_id=$request->category_id;
        $product->name=$request->name;
        $product->updated_by=Auth::user()->id;
        $product->save();
        return redirect()->route('products.view')->with('success','Product Updated');

    }
    public function delete($id){
        $product=Product::find($id);
        $product->delete();
        return redirect()->route('products.view')->with('Deleted','Product Deleted Successfully');


    }
}
