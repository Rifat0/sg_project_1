<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Carbon;
use Session;
use Hash;

class MasterController extends Controller
{
    public function signin()
    {
        return view('front_end.master_signup');
    }

    public function login_submit(Request $request)
    {
        $this->validate($request, [
            'mobile_email'=> 'required',
            'password'=> 'required|min:6'
         ]);

        $user_master_data = DB::table('user_master')->where('mobile_email', $request->input('mobile_email'))->get();

        if (count($user_master_data)>0) {

            if (Hash::check($request->input('password'), $user_master_data[0]->password)){

            $session_data = [
                    'user_master_id' => $user_master_data[0]->user_master_id,
                    'avater' => $user_master_data[0]->avater,
                    'first_name' => $user_master_data[0]->first_name,
                    'mobile_email' => $user_master_data[0]->mobile_email
                ];

            Session::push('user_master_data', $session_data);

            return redirect('/master/dashboard');

            }else{
                return redirect('/master')->with('error_message', 'Password do not match!');
            }

        }else {
            return redirect('/master')->with('error_message', 'Mobile or Password do not match!');
        }

    }

    public function index()
    {
        return view('master.dashboard');
    }

    public function user_list()
    {
        $user_admin = DB::table('user_admin')->get();
        return view('master.user_list',compact('user_admin'));
    }

    public function user_view($id)
    {
        $user_admin_data = DB::table('user_admin')->where('user_admin_id', $id)->first();
        return view('master.user_view',compact('user_admin_data'));
    }

    public function user_status($id,$status)
    {
        if ($status==0) {
            $value="1";
        } elseif ($status==1) {
            $value="0";
        }
        
        DB::table('user_admin')->where('user_admin_id', $id)
                ->update(
                    [
                        'status' => $value,
                        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ]);
        return redirect('/master/user-list')->with('status', 'User Status Updated Successfully!');
    }

    public function service_list()
    {
        $service_list = DB::table('service_list')->get();
        return view('master.service_list',compact('service_list'));
    }

    public function tutorial_list()
    {
        $tutorial_list = DB::table('tutorial_list')->get();
        return view('master.tutorial_list',compact('tutorial_list'));
    }

    public function create_tutorial()
    {
        return view('master.create_tutorial');
    }

    public function create_tutorial_submit(Request $tutorial)
    {
         $this->validate($tutorial, [
            'tutorial_title'=> 'required',
            'tutorial_link'=> 'required',
         ]);

        DB::table('tutorial_list')
                ->insert(
                    [
                        'tutorial_title' => $tutorial->input('tutorial_title'),
                        'tutorial_link' => $tutorial->input('tutorial_link'),
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ]);

        return redirect('/master/tutorial-list')->with('status', 'New Tutorial Created successful!');
    }

    public function tutorial_edit($id)
    {
        $tutorial_data = DB::table('tutorial_list')->where('tutorial_id', $id)->first();
        return view('master.create_tutorial',compact('tutorial_data'));
    }

    public function tutorial_edit_submit(Request $tutorial)
    {
         $this->validate($tutorial, [
            'tutorial_title'=> 'required',
            'tutorial_link'=> 'required',
         ]);

        DB::table('tutorial_list')->where('tutorial_id', $tutorial->input('tutorial_id'))
                ->update(
                    [
                        'tutorial_title' => $tutorial->input('tutorial_title'),
                        'tutorial_link' => $tutorial->input('tutorial_link'),
                        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ]);

        return redirect('/master/tutorial-list')->with('status', 'Tutorial updated successful!');
    }

    public function tutorial_delete($id)
    {
        DB::table('tutorial_list')->where('tutorial_id', $id)->delete();
        return redirect('/master/tutorial-list')->with('status', 'Tutorial deleted successful!');
    }

    public function logout(Request $request)
    {
        Session::flush();
        return redirect('/master');
    }
}
