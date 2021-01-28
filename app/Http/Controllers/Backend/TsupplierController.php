<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class TsupplierController extends Controller
{
    public function view(){
        $allData=User::where('usertype','supplier')->where('status','1')->get();
        return view('backend.tsupplier.view-tsupplier',compact('allData'));
    }

    public function draftView(){
        $allData=User::where('usertype','supplier')->where('status','0')->get();
        return view('backend.tsupplier.draft-tsupplier',compact('allData'));
    }

    /*public function delete(Request $request){

        $tsupplier=User::find($request->id);
        $tsupplier->delete();
        return redirect()->route('tsuppliers.draft.view')->with('success','Data Deleted Successfully');


    }*/


    public function delete($id)
    {

        $tsupplier = User::find($id);
        if (file_exists('public/upload/user_images/'. $tsupplier->image) AND! empty( $tsupplier->image))
        {
            unlink('public/upload/user_images/'. $tsupplier->image);
        }


        $tsupplier->delete();
        return redirect()->route('tsuppliers.draft.view')->with('success', 'Data Deleted Successfully');

    }
}
