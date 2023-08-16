<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\popup;

class popupController extends Controller
{

 public function listpopup(){
        $datas = DB::table('popup')->get();
     return view('admin.popup.list',compact('datas'));
    }


 public function addpopup(Request $request){
     return view('admin.popup.add');
     }


public function savepopup(Request $request){
    //dd($request->input());
      $popup = new popup;
      $popup->description = $request->description;
     
      $res = $popup->save();
    if($res){
        return back()->with('success','popup added successfully');
    }
    else{
        return back()->with('fail','error');
    }
    return view('listpopup');
     }


public function editpopup($id){
    $data = popup::findOrFail($id);
    return view('admin.popup.edit',compact('data'));
}

public function updatepopup(Request $request,$id){
    $data= popup::findOrFail($id);
    $data->description = $request->description; 
    $data->update();
    $datas = popup::all();
      return redirect('listpopup');
    }


    public function deletepopup(Request $request , $id){
         $data= popup::findOrFail($id);
         $data->delete();
         return back()->with('success','popup deleted successfully');
     }


}
