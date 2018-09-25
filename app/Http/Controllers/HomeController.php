<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon;
use Session;

class HomeController extends Controller
{
    public function index()
    {
        return view('front_end.index');
    }

    public function careers()
    {
        return view('front_end.careers');
    }

    public function support()
    {
        return view('front_end.support');
    }

    public function all_service()
    {
        return view('front_end.all_service');
    }

    public function tutorial()
    {
        $tutorial_list = DB::table('tutorial_list')->get();
        return view('front_end.tutorial',compact('tutorial_list'));
    }

    public function signup()
    {
        return view('front_end.signup');
    }

    public function signin()
    {
        return view('front_end.signin');
    }

}
