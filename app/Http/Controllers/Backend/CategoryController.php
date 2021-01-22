<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Category;
use Illuminate\Http\Request;
use Auth;

class CategoryController extends Controller
{
    public function view(){
        $allData=Category::all();
        return view('backend.category.view-category',compact('allData'));
    }

    public function add(){

        return view('backend.category.add-category');
    }

    public function store(Request $request){

        $category =new Category();
        $category->name=$request->name;
        $category->created_by=Auth::user()->id;
        $category->save();
        return redirect()->route('category.view')->with('success','Data saved');
    }
    public function edit($id){

        $editData=Category::find($id);
        /*dd($editData);*/
        return view('backend.category.edit-category',compact('editData'));

    }

    public function update(Request $request, $id){


        $category = Category::find($id);
        $category->name=$request->name;
        $category->updated_by=Auth::user()->id;
        $category->save();
        return redirect()->route('category.view')->with('success','Data Updated');

    }
    public function delete($id){
        $category=Category::find($id);
        $category->delete();
        return redirect()->route('category.view')->with('Deleted','Data Deleted Successfully');


    }

}
