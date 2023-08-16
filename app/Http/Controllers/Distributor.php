<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use App\Models\category;
use Illuminate\Support\Facades\Hash as FacadesHash;

class Distributor extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.user.change_password');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $request->validate([
            'password' => 'required',

        ]);

        #Update the new Password
        $data = User::where('id', '=', $request->id)->update([
            'password' => FacadesHash::make($request->password)

        ]);
        return redirect('dashboard')->with('success', 'Successfully Updated');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data1 = category::all();
        $user = User::find($id);
        if (!empty($user)) {
            return view('admin.user.edit_distributor', compact('user', 'data1'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'category_id' => 'required',

            'password' => 'required'
        ]);
        $user = User::where('id', $request->user_id)->first();
        $user->name = $request->name;
        $user->category_id = implode(",", $request->category_id);
        $user->email = $request->email;
        $user->password = FacadesHash::make($request->password);
        $response = $user->update();
        if ($response) {
            return back()->with('success', 'Successfully Update');
        } else {
            return back()->with('fail', 'Something wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $code = User::find($id);

        $code->delete();
        return back()->with('success', 'Successfully Deleted Record');
    }
}
