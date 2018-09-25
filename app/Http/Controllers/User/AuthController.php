<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Carbon;
use Session;
use Hash;

class AuthController extends Controller
{
    public function registration_submit(Request $request)
    {
        $this->validate($request, [
            'first_name'=> 'required',
            'last_name'=> 'required',
            'mobile_email'=> 'required|unique:user_admin,mobile_email',
            'birthday'=> 'required',
            'birthmonth'=> 'required',
            'birthyear'=> 'required',
            'gender'=> 'required',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
         ]);

        DB::table('user_admin')
                ->insert(
                    [
                        'first_name' => $request->input('first_name'),
                        'last_name' => $request->input('last_name'),
                        'mobile_email' => $request->input('mobile_email'),
                        'birthday' => $request->input('birthday'),
                        'birthmonth' => $request->input('birthmonth'),
                        'birthyear' => $request->input('birthyear'),
                        'gender' => $request->input('gender'),
                        'password' => Hash::make($request->input('password')),
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ]);

        return redirect('/')->with('status', 'Your registration successful!');
    }

    public function login_submit(Request $request)
    {
        $this->validate($request, [
            'mobile_email'=> 'required',
            'password'=> 'required|min:6'
         ]);

        $user_admin_data = DB::table('user_admin')->where('mobile_email', $request->input('mobile_email'))->get();

        if (count($user_admin_data)>0) {

            if (Hash::check($request->input('password'), $user_admin_data[0]->password)){

                if ($user_admin_data[0]->status==1) {
                    $session_data = [
                            'user_admin_id' => $user_admin_data[0]->user_admin_id,
                            'avater' => $user_admin_data[0]->avater,
                            'first_name' => $user_admin_data[0]->first_name,
                            'mobile_email' => $user_admin_data[0]->mobile_email
                        ];

                    Session::push('user_admin_data', $session_data);

                    return redirect('/user/dashboard');
                }else{
                    return redirect('/')->with('error_message', 'Sorry, Your account is temporary blocked. Contact to support center!!');
                }

            }else{
                return redirect('/')->with('error_message', 'Password do not match!');
            }

        }else {
            return redirect('/')->with('error_message', 'Mobile or Password do not match!');
        }

    }

    public function logout(Request $request)
    {
    	Session::flush();
    	return redirect('/');
    }

    public function change_password_submit(Request $change_password)
    {
        $this->validate($change_password, [
            'current_password'=> 'required|min:6',
            'new_password' => 'required|min:6|required_with:confirmed_new_password|same:confirmed_new_password',
            'confirmed_new_password' => 'required|min:6'
         ]);

        $current_user_data = DB::table('user_admin')->where('user_admin_id', Session::get('user_admin_data')[0] ['user_admin_id'])->first();

        if (Hash::check($change_password->input('current_password'), $current_user_data->password)){
                
            DB::table('user_admin')->where('user_admin_id', Session::get('user_admin_data')[0] ['user_admin_id'])
            ->update(
                [
                    'password' => Hash::make($change_password->input('new_password')),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ]);

            Session::flush('user_admin_data');
            return redirect('/');

        }else{
            return redirect('/user/change-password')->with('error_message', 'Current Password do not match!');
        }
    }
}
