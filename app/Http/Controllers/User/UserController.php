<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;
use Carbon;

class UserController extends Controller
{
    public function index()
    {
        return view('user.dashboard');
    }

    public function edit_profile()
    {
        $user_data = DB::table('user_admin')->where('user_admin_id', Session::get('user_admin_data')[0] ['user_admin_id'])->first();
        return view('user.edit_profile',compact('user_data'));
    }

    public function edit_profile_submit(Request $p_profile_data)
    {
        $this->validate($p_profile_data, [
            'avater'=> 'image|mimes:jpg,jpeg,png,svg|dimensions:min_width=70,min_height=70,max_width=800,max_height=800',
            'first_name'=> 'required',
            'last_name'=> 'required',
            'address'=> 'required'
         ]);

        $destinationPath = 'public/backend/profile_picture/';
        
        if ($p_profile_data->input('p_avater')!="0.png" && $p_profile_data->hasFile('avater')) {

            $filepath = $destinationPath.$p_profile_data->input('p_avater') ;
            unlink($filepath);

            $file = $p_profile_data->avater;
            $extension = $file->getClientOriginalExtension();
            $fileName = $p_profile_data->input('user_admin_id').".".$extension;
            $file->move($destinationPath,$fileName);

        }elseif($p_profile_data->input('p_avater')=="0.png" && $p_profile_data->hasFile('avater')) {

            $file = $p_profile_data->avater;
            $extension = $file->getClientOriginalExtension();
            $fileName = $p_profile_data->input('user_admin_id').".".$extension;
            $file->move($destinationPath,$fileName);

        }elseif ($p_profile_data->input('p_avater')!="0.png" ) {
            $fileName = $p_profile_data->input('p_avater');
        }

        DB::table('user_admin')->where('user_admin_id', $p_profile_data->input('user_admin_id'))
                ->update(
                    [
                        'avater' => $fileName,
                        'first_name' => $p_profile_data->input('first_name'),
                        'last_name' => $p_profile_data->input('last_name'),
                        'address' => $p_profile_data->input('address'),
                        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ]);

        return redirect('/user/dashboard')->with('status', 'Profile Updated Successfully!');
    }

    public function change_password()
    {
        return view('user.change_password');
    }

    public function software_list()
    {
        return view('user.software_list');
    }
    
    public function create()
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
