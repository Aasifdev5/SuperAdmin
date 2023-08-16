<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use App\Models\PersonalAccess;

class User extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function register()
    {
        return view('register');
    }

    public function registeration(Request $request)
    {

        $customer = new Customers();
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:customers',
            'password' => 'required'
        ]);

        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->password = FacadesHash::make($request->password);
        $response = $customer->save();
        if ($response) {
            return back()->with('success', 'Successfully register');
        } else {
            return back()->with('fail', 'Something wrong');
        }
    }
    public function customer_login(Request $request)
    {
        $customer = new Customers();

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $customer = Customers::where('email', '=', $request->email)->first();

        if ($customer) {
            if (FacadesHash::check($request->password, $customer->password)) {
                $personal = new PersonalAccess();
                $session = $request->session()->all();
                $request->Session()->put('loginId', $customer->id);
                $request->Session()->put('token', $session['_token']);
                $data = Customers::where('id', '=', $customer->id)->first();

                $personal->tokenable_type = "App\Models\Customers";
                $personal->tokenable_id = $customer->id;
                $personal->name = $data->name;
                $personal->token = $session['_token'];
                $personal->save();


                return redirect('dashboard');
            } else {
                return back()->with('fail', 'Password does not matches');
            }
        } else {
            return back()->with("fail", "Email is not register");
        }
    }




    public function users_list(Request $request)
    {
    }

    public function add_user(Request $request)
    {

        $data = array();
        if (Session::has('loginId')) {
            $data = Customers::where('id', '=', Session::get('loginId'))->first();
        }

        $token = Session::get('token');
        $check = PersonalAccess::where('token', '=', $token)->first();
        if (!empty($check)) {
            return view('add_user', compact('data'));
        } else {
            Session::forget('loginId');
            $request->session()->invalidate();
            return redirect('/');
        }
    }
}
