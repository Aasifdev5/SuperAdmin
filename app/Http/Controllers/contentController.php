<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\content;

use App\Models\category;

class contentController extends Controller
{
    //
 public function listcontant(){
        $datas = DB::table('content')->get();
     return view('admin.contant.list',compact('datas'));
    }


 public function addcontent(Request $request){
     return view('admin.contant.add');
     }


public function savecontent(Request $request){
    //dd($request->input());
      $content = new content;
      $content->description = $request->description;
     
      $res = $content->save();
    if($res){
        return back()->with('success','content added successfully');
    }
    else{
        return back()->with('fail','error');
    }
    return view('listcontant');
     }


public function editcontent($id){
    $data = content::findOrFail($id);
    return view('admin.contant.edit',compact('data'));
}

public function updatecontent(Request $request,$id){
    $data= content::findOrFail($id);
    $data->description = $request->description; 
    $data->update();
    $datas = category::all();
      return redirect('listcontant');
    }   

    public function deletecontent(Request $request , $id){
         $data= content::findOrFail($id);
         $data->delete();
         return back()->with('success','content deleted successfully');
     }


}
