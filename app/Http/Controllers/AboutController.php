<?php

namespace App\Http\Controllers;
use Illuminte\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\JoinUs;


class AboutController extends Controller
{
    //
    public function index()
    {
        return view('about');
    }
    public function Join(Request $req)
    {
      $data = new JoinUs;
      $data->name=$req->name;
      $data->email=$req->email;
      $data->phone=$req->phone;
      $data->position=$req->position;
      $data->message=$req->message;
      echo $data->save();

    }
}
