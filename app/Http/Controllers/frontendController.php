<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash as FacadesHash;
use App\Models\subcategory;
use App\Models\category;
use Carbon\Carbon;
use App\Mail\SendMailreset;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;
use App\Models\PasswordReset;
use Illuminate\Support\Facades\Mail;




class frontendController extends Controller
{

    public function index(Request $request)
    {
        $datas = DB::table('content')->latest()->get();

        $popups = DB::table('popup')->latest()->get();

        $slider = DB::table('slider')->get();

        $subcategories = DB::table('subcategory')
            ->join('category', 'subcategory.cat_id', '=', 'category.id')
            ->select('subcategory.id', 'subcategory.cat_id', 'subcategory.time', 'subcategory.date', 'subcategory.number', 'category.name as category_name')
            ->whereIn('subcategory.id', function ($query) {
                $query->select(DB::raw('MAX(id)'))
                    ->from('subcategory')
                    ->groupBy('cat_id');
            })
            ->orderBy('subcategory.time', 'asc')
            ->take(5) // Limit the result to 5 records
            ->get();

        $todayDate = \Carbon\Carbon::today()->format('Y-m-d');
        $tomorrowDate = \Carbon\Carbon::tomorrow()->format('Y-m-d');

        $todayRecords = DB::table('subcategory')
            ->whereIn('id', function ($query) use ($todayDate) {
                $query->select(DB::raw('MAX(id)'))
                    ->from('subcategory')
                    ->where('date', $todayDate)
                    ->groupBy('cat_id');
            })
            ->get();
        $tomorrowDate = \Carbon\Carbon::today()->subDay()->format('Y-m-d');

        $tomorrowRecords = DB::table('subcategory')
            ->whereIn('id', function ($query) use ($tomorrowDate) {
                $query->select(DB::raw('MAX(id)'))
                    ->from('subcategory')
                    ->where('date', $tomorrowDate)
                    ->groupBy('cat_id');
            })
            ->get();


        $sub = DB::table('subcategory')
            ->join('category', 'subcategory.cat_id', '=', 'category.id')
            ->select('subcategory.date', 'subcategory.number', 'subcategory.cat_id', 'category.name as category_name')
            ->get();



        return view('frontend.index', compact('datas', 'popups', 'slider', 'subcategories', 'todayRecords', 'tomorrowRecords', 'sub'));
    }


    public function list()
    {
        $data1 = User::all();
        return view('admin.user.list', compact('data1'));
    }
    public function forget_password()
    {

        return view('admin.user.forget_password');
    }
    public function forget_mail(Request $request)
    {
        try {
            $customer = User::where('email', $request->email)->get();

            if (count($customer) > 0) {

                $token = Str::random(40);
                $domain = URL::to('/');
                $url = $domain . '/ResetPasswordLoad?token=' . $token;

                $data['url'] = $url;
                $data['email'] = $request->email;
                $data['title'] = "Password Reset";
                $data['body'] = "Please click on below link to reset your password.";
                $data['auth'] = "King Satta";

                Mail::to($request->email)->send(
                    new SendMailreset(
                        $token,
                        $request->email,
                        $data
                    )
                );


                $datetime = Carbon::now()->format('Y-m-d H:i:s');

                PasswordReset::updateOrCreate(
                    ['email' => $request->email],
                    [
                        'email' => $request->email,
                        'token' => $token,
                        'created_at' => $datetime
                    ]
                );

                return response()->json(['success' => true, 'msg' => 'Please check your mail to reset your password.']);
            } else {
                return response()->json(['success' => false, 'msg' => 'User not found']);
            }
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'msg' => $e->getMessage()]);
        }
    }
     public function ResetPasswordLoad(Request $request)
    {

        $resetData =  PasswordReset::where('token', $request->token)->get();
        if (isset($request->token) && count($resetData) > 0) {
            $customer = User::where('email', $resetData[0]['email'])->get();
            return view('ResetPasswordLoad', ['customer' => $customer]);
        }
    }



    public function ResetPassword(Request $request)
    {

        $request->validate([

            'new_password' => 'required',
            'confirm_password' => ['same:new_password']
        ]);

        $data = User::find($request->user_id);

        $data->password = FacadesHash::make($request->new_password);
        $data->update();

        PasswordReset::where('email', $data->email)->delete();

        echo "<h1>Successfully Reset Password</h1>";
    }
    public function add_distributor()
    {
        $data1 = category::all();
        return view('admin.add_distributor', compact('data1'));
    }
    public function edit_distributor(Request $request, $uid)
    {
        $user = User::find($uid);
        if (!empty($user)) {
            return view('admin.user.edit_distributor', compact('user'));
        }
    }
    public function delete_user(Request $request, $uid)
    {


        $code = User::findorfail($uid);

        $code->delete();
        return back()->with('success', 'Successfully Deleted Record');
    }
    public function save_distributor(Request $request)
    {

        $user = new User();
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        $user->name = $request->name;
        $user->category_id = implode(",", $request->category_id);
        $user->email = $request->email;
        $user->password = FacadesHash::make($request->password);
        $response = $user->save();
        if ($response) {
            return back()->with('success', 'Successfully register');
        } else {
            return back()->with('fail', 'Something wrong');
        }
    }
    public function page(Request $request, $key)
    {
        // return $request->get('cat_id');
        // $currenturl = URL::current()->getName();
        // $catId = $request->get('cat_id');
        $catId = $key;
        $categoryId = $request->id;
        $datas = DB::table('content')->latest()->get();
        $popups = DB::table('popup')->latest()->get();

        $subcategories = DB::table('subcategory')
            ->join('category', 'subcategory.cat_id', '=', 'category.id')
            ->select('subcategory.id', 'subcategory.cat_id', 'subcategory.time', 'subcategory.date', 'subcategory.number', 'category.name as category_name')
            ->whereIn('subcategory.id', function ($query) {
                $query->select(DB::raw('MAX(id)'))
                    ->from('subcategory')
                    ->groupBy('cat_id');
            })
            ->get();


        $todayDate = \Carbon\Carbon::today()->format('Y-m-d');
        $tomorrowDate = \Carbon\Carbon::tomorrow()->format('Y-m-d');

        $todayRecords = DB::table('subcategory')
            ->whereIn('id', function ($query) use ($todayDate) {
                $query->select(DB::raw('MAX(id)'))
                    ->from('subcategory')
                    ->where('date', $todayDate)
                    ->groupBy('cat_id');
            })
            ->get();

        $tomorrowDate = \Carbon\Carbon::today()->subDay()->format('Y-m-d');

        $tomorrowRecords = DB::table('subcategory')
            ->whereIn('id', function ($query) use ($tomorrowDate) {
                $query->select(DB::raw('MAX(id)'))
                    ->from('subcategory')
                    ->where('date', $tomorrowDate)
                    ->groupBy('cat_id');
            })
            ->get();

        $sub = DB::table('subcategory')
            ->join('category', 'subcategory.cat_id', '=', 'category.id')
            ->select('subcategory.date', 'subcategory.number', 'category.name as category_name', 'category.id as cat_id')

            ->orderByRaw("IF(subcategory.cat_id = ?, 0, 1)", [$catId])
            ->get();


        // Mapping cat_id to name
        $catIdToName = [];
        foreach ($sub as $subcategory) {
            $catIdToName[$subcategory->cat_id] = $subcategory->category_name;
        }

        // Get the category name based on $catId
        $categoryName = isset($catIdToName[$catId]) ? $catIdToName[$catId] : '';

        return view('frontend.dd', compact('datas', 'popups', 'subcategories', 'todayRecords', 'tomorrowRecords', 'sub', 'catId', 'categoryId', 'catIdToName', 'categoryName', 'key'));
    }
}
