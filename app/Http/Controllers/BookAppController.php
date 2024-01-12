<?php

namespace App\Http\Controllers;
use Illuminte\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Patient;

class BookAppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('bookapp');
    }

    /**
     * Store a newly created resource in storage.*/

    public function store(Request $request)
    {
        $name = $request ->input('name');
        $email = $request ->input('email');
        $phone = $request ->input('phone');
        $date = $request ->input('date');
        $treatment = $request ->input('treatment');
        $doctor = $request ->input('doctor');
        $message = $request ->input('message');

        $isInsertSuccress = Patient::insert(['name'=>$name,
                                            'email'=>$email,
                                            'phone'=>$phone,
                                            'date'=>$date,
                                            'treatment'=>$treatment,
                                            'doctor'=>$doctor,
                                            'message'=>$message]);
        if($isInsertSuccress) echo '<h1>Insert Success<\h1>';
        else echo '<h1>Insert Failed<\h1>';
}
}
