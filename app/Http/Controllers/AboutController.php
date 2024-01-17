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
        return view('user.about');
    }
    
    public function Join(Request $request)
    {
      $name = $request ->input('name');
      $email = $request ->input('email');
      $phone = $request ->input('phone');
      $position = $request ->input('position');
      $message = $request ->input('message');

      $isInsertSuccress = JoinUs::insert(['name'=>$name,
                                          'email'=>$email,
                                          'phone'=>$phone,
                                          'position'=>$position,
                                          'message'=>$message]);
      if($isInsertSuccress) echo 'Your application request has been sent successfully. Thank you!';
      else echo '<h1>Insert Failed<\h1>';
    }
}
