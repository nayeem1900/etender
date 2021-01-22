<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\customer;
use Illuminate\Http\Request;
use Auth;
class CustomersController extends Controller
{
    public function view(){
        $allData=customer::all();
        return view('backend.customer.view-customer',compact('allData'));
    }


    public function add(){

        return view('backend.customer.add-customer');
    }

    public function store(Request $request){

        $customer =new Customer();
        $customer->name=$request->name;
        $customer->mobile_no=$request->mobile_no;
        $customer->email=$request->email;
        $customer->address=$request->address;
        $customer->created_by=Auth::user()->id;
        $customer->save();
        return redirect()->route('customers.view')->with('success','Data saved');
    }

    public function edit($id){

        $editData=Customer::find($id);
        /*dd($editData);*/
        return view('backend.customer.edit-customer',compact('editData'));

    }

    public function update(Request $request, $id){


        $customer = Customer::find($id);
        $customer->name=$request->name;
        $customer->mobile_no=$request->mobile_no;
        $customer->email=$request->email;
        $customer->address=$request->address;
        $customer->updated_by=Auth::user()->id;
        $customer->save();
        return redirect()->route('customers.view')->with('success','Data Updated');

    }

    public function delete($id){
        $customer=Customer::find($id);
        $customer->delete();
        return redirect()->route('customers.view')->with('customer','Data Deleted Successfully');


    }

}




