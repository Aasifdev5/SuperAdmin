<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use DB;
use App\Models\slider;
use App\Models\category;

class sliderController extends Controller
{
    public function listslider(){
        $datas = DB::table('slider')->get();
     return view('admin.slider.list',compact('datas'));
    }


   public function addslider(Request $request){
     return view('admin.slider.add');
     } 

public function saveslider(Request $request)
{
    $slider = new Slider;
    
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imagePath = 'images/slider';
        $imageName = 'image-' . time() . '.' . $image->extension();
        $image->move($imagePath, $imageName);
        $slider->image = $imageName;
    }
    
    $slider->link = $request->input('link');
    
    $res = $slider->save();
    
    if ($res) {
        return redirect()->back()->with('success', 'Slider added successfully');
    } else {
        return redirect()->back()->with('fail', 'Error occurred');
    }
    
    return view('listslider');
}
   


public function editslider($id){
    $data = slider::findOrFail($id);
    return view('admin.slider.edit',compact('data'));
}
     

public function updateslider(Request $request,$id){
    $data= slider::findOrFail($id);
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imagePath = 'images/slider';
        $imageName = 'image-' . time() . '.' . $image->extension();
        $image->move($imagePath, $imageName);
        $data->image = $imageName;
    }
    
    $data->link = $request->input('link');
    $data->update();
    $datas = category::all();
     return redirect('listslider');
    }

  public function deleteslider(Request $request , $id){
         $data= slider::findOrFail($id);
         $data->delete();
         return back()->with('success','slider deleted successfully');
     }

}
