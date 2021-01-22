<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\Slider;
class SliderController extends Controller
{

    public function view(){


        $data['allData']=Slider::all();


        return view ('backend.slider.view-slider', $data);


    }


    public function add(){

        return view('backend.slider.add-slider');

    }

    public function store(Request $request){


        $data =new Slider();
        $data->created_by=Auth::user()->id;
        if($request->file('image')){

            $file=$request->file('image');
            @unlink(public_path('upload/slider_images/'.$data->image));
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/slider_images'),$filename);
            $data['image']=$filename;
        }
        $data->save();
        session()->flash('success',' Logo update success');
        return redirect()->route('sliders.view');
    }

    public function edit($id){

        $editData=Slider::find($id);
        return view('backend.sliders.edit-slider',compact('editData'));
    }


    public function update(Request $request,$id){

        $data =Slider::find($id);
        $data->updated_by=Auth::user()->id;
        if($request->file('image')){
            $file=$request->file('image');
            @unlink(public_path('upload/slider_images/'.$data->image));
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/slider_images'),$filename);
            $data['image']=$filename;
        }
        $data->save();
        session()->flash('success',' Logo update success');
        return redirect()->route('sliders.view');


    }


    public function delete($id){

        $slider=Slider::find($id);

        if(! is_null($slider)){
            //if it is parent Brand delete sub Brand


            if (file_exists('public/upload/logo_images/'.$slider->image) AND! empty($slider->image))
            {
                unlink('public/upload/logo_images/'.$slider->image);
            }

            $slider->delete();
        }

        session()->flash('success', 'Logo has deleted Successfully');
        return redirect()->route('sliders.view');
    }
}
