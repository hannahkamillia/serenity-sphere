<?php

namespace App\Http\Controllers;
use Illuminte\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            $usertype=Auth()->user()->usertype;

            if($usertype=='user'){
                return view('dashboard');
            }
            else if($usertype=='admin'){
                return view('admin.adminHome');
            }
            else
            {
                return redirect()->back();
            }
        }
        return view('home');
    }
    /*public function post(){
        return view("post");
    }*/
}
