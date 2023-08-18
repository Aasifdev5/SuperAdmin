<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\content;
use App\Models\Banner;
use App\Models\category;

class contentController extends Controller
{
    //
    public function listcontant()
    {
        $datas = DB::table('content')->get();
        return view('admin.contant.list', compact('datas'));
    }


    public function addcontent(Request $request)
    {
        return view('admin.contant.add');
    }

    public function banner()
    {
        return view('admin.contant.add_banner');
    }
    public function save_banner(Request $request)
    {
        $slider = new Banner;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = 'images/banner';
            $imageName = 'image-' . time() . '.' . $image->extension();
            $image->move($imagePath, $imageName);
            $slider->image = $imageName;
        }

        $slider->link = $request->input('link');

        $res = $slider->save();

        if ($res) {
            return redirect()->back()->with('success', 'Banner added successfully');
        } else {
            return redirect()->back()->with('fail', 'Error occurred');
        }
    }
    public function banners()
    {
        $datas = Banner::all();
        return view('admin.contant.banners', compact('datas'));
    }
    public function edit_banner(Request $request)
    {
        $data = Banner::findOrFail($request->id);
        return view('admin.contant.edit_banner', compact('data'));
    }
    public function update_banner(Request $request)
    {
        $data = Banner::findOrFail($request->id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = 'images/banner';
            $imageName = 'image-' . time() . '.' . $image->extension();
            $image->move($imagePath, $imageName);
            $data->image = $imageName;
        }

        $data->link = $request->input('link');
        $res = $data->update();
        if ($res) {
            return redirect('banners');
        }
    }
    public function delete_banner(Request $request)
    {
        $data = Banner::findOrFail($request->id);
        $data->delete();
        return back()->with('success', 'Banner deleted successfully');
    }
    public function savecontent(Request $request)
    {
        //dd($request->input());
        $content = new content;
        $content->description = $request->description;

        $res = $content->save();
        if ($res) {
            return back()->with('success', 'content added successfully');
        } else {
            return back()->with('fail', 'error');
        }
        return view('listcontant');
    }


    public function editcontent($id)
    {
        $data = content::findOrFail($id);
        return view('admin.contant.edit', compact('data'));
    }

    public function updatecontent(Request $request, $id)
    {
        $data = content::findOrFail($id);
        $data->description = $request->description;
        $data->update();
        $datas = category::all();
        return redirect('listcontant');
    }

    public function deletecontent(Request $request, $id)
    {
        $data = content::findOrFail($id);
        $data->delete();
        return back()->with('success', 'content deleted successfully');
    }
}
