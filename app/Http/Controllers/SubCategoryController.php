<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\subcategory;
use App\Models\category;
use App\Models\UpdateNumber;
use App\Models\UpdateNumber2;
use App\Models\UpdateNumber3;
use App\Models\UpdateNumber4;
use App\Models\UpdateNumber5;
use App\Models\User;

class SubCategoryController extends Controller
{
    //

    public function listsubcategory()
    {
        $datas = DB::table('subcategory')
            ->join('category', 'subcategory.cat_id', '=', 'category.id')
            ->select('subcategory.*', 'category.name as category_name')
            ->get();

        return view('admin.subcategory.list', compact('datas'));
    }


    public function addsubcategory(Request $request)
    {
        $data1 = category::all();
        return view('admin.subcategory.add', compact('data1'));
    }

    public function savesubcategory(Request $request)
    {
        $player_name1 = DB::select("select count(id) as record from subcategory where cat_id='" . $request->input('data1') . "' and date='" . $request->date . "'");

        $player_name1 = array_column($player_name1, 'record', '0');

        if (($player_name1['0']) == 1) {
            return back()->with('error', 'it can not created because it already exits.');
        }
        $subcategory = new subcategory;
        $kingsatta = new UpdateNumber;
        $superfast = new UpdateNumber2;
        $resultsatta = new UpdateNumber3;
        $desawar = new UpdateNumber4;
        $desawarkings = new UpdateNumber5;

        $sql = "SELECT * FROM `category` where id='" . $request->input('data1') . "' ";
        $time = DB::select($sql);
        $time = array_column($time, 'time', '0');

        $kingsatta->cat_id = $request->input('data1');
        $kingsatta->date = $request->input('date');
        $kingsatta->time = $time['0'];
        $kingsatta->number = $request->input('number');
        $kingsatta->save();

        $superfast->cat_id = $request->input('data1');
        $superfast->date = $request->input('date');
        $superfast->time = $time['0'];
        $superfast->number = $request->input('number');
        $superfast->save();

        $resultsatta->cat_id = $request->input('data1');
        $resultsatta->date = $request->input('date');
        $resultsatta->time = $time['0'];
        $resultsatta->number = $request->input('number');
        $resultsatta->save();

        $desawar->cat_id = $request->input('data1');
        $desawar->date = $request->input('date');
        $desawar->time = $time['0'];
        $desawar->number = $request->input('number');
        $desawar->save();

        $desawarkings->cat_id = $request->input('data1');
        $desawarkings->date = $request->input('date');
        $desawarkings->time = $time['0'];
        $desawarkings->number = $request->input('number');
        $desawarkings->save();


        $subcategory->cat_id = $request->input('data1');
        $subcategory->date = $request->input('date');
        $subcategory->time = $time['0'];
        $subcategory->number = $request->input('number');


        $res = $subcategory->save();

        if ($res) {
            return redirect()->back()->with('success', 'subcategory added successfully');
        } else {
            return redirect()->back()->with('fail', 'Error occurred');
        }

        return redirect('listsubcategory');
    }


    public function editsubcategory($id)
    {
        $data1 = category::all();
        $data = subcategory::findOrFail($id);
        return view('admin.subcategory.edit', compact('data', 'data1'));
    }

    public function updatesubcategory(Request $request, $id)
    {
        $data = subcategory::findOrFail($id);
        $sql = "SELECT * FROM `category` where id='" . $request->input('data1') . "' ";
        $time = DB::select($sql);
        $time = array_column($time, 'time', '0');
        $data->cat_id = $request->input('data1');
        $data->date = $request->input('date');
        $data->time = $time['0'];
        $data->number = $request->input('number');
        $data->update();

        return redirect('listsubcategory');
    }

    public function deletesubcategory(Request $request, $id)
    {
        $data = subcategory::findOrFail($id);
        $data->delete();
        $kingsatta =  UpdateNumber::findOrFail($id);
        $kingsatta->delete();
        $superfast =  UpdateNumber2::findOrFail($id);
        $superfast->delete();
        $resultsatta =  UpdateNumber3::findOrFail($id);
        $resultsatta->delete();
        $desawar =  UpdateNumber4::findOrFail($id);
        $desawar->delete();
        $desawarkings =  UpdateNumber5::findOrFail($id);
        $desawarkings->delete();

        return back()->with('success', 'subcategory deleted successfully');
    }
}
