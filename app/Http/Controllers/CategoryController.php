<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\category;
use App\Models\subcategory;


class CategoryController extends Controller
{


  public function listcategory()
  {
    $datas = DB::table('category')->get();
    return view('admin.category.list', compact('datas'));
  }

  public function addcategory(Request $request)
  {
    return view('admin.category.add');
  }


  public function activeInactive($id)
  {
    $sdata = subcategory::where("cat_id", $id)->update(["status" => 1]);
    $data = category::findOrFail($id);
    $data->status = '1';
    $data->update();

    return redirect('listcategory');
  }

  public function Inactive($id)
  {
    $sdata = subcategory::where("cat_id", $id)->update(["status" => 0]);
    $data = category::findOrFail($id);
    $data->status = '0';
    $data->update();

    return redirect('listcategory');
  }

  public function savecategory(Request $request)
  {
    $category = new category;

    $category->name = $request->input('name');



    $category->time = $request->input('time');
    $res = $category->save();

    if ($res) {
      return redirect()->back()->with('success', 'category added successfully');
    } else {
      return redirect()->back()->with('fail', 'Error occurred');
    }

    return view('listcategory');
  }


  public function editcategory($id)
  {
    $data = category::findOrFail($id);
    return view('admin.category.edit', compact('data'));
  }



  public function updatecategory(Request $request, $id)
  {



    $sdata = subcategory::where("cat_id", $id)->update(["time" => $request->time]);

    $data = category::findOrFail($id);
    $data->name = $request->name;

    $data->time = $request->input('time');
    $data->update();
    $datas = category::all();
    return redirect('listcategory');
  }

  public function deletecategory(Request $request, $id)
  {
    $data = category::findOrFail($id);
    $data->delete();
    return back()->with('success', 'category deleted successfully');
  }
}
