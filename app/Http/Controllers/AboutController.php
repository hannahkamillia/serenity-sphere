<?php

namespace App\Http\Controllers;
use Illuminte\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\About;


class AboutController extends Controller
{
    //
    public function index()
    {
        return view('about');
    }
}
