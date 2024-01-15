<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\User;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='user'){
            return view('home');
        }
        else{
            return view('admin.adminHome');
        }
    }

    public function index(){
        return view('home');
    }
}
