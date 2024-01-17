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
        if($isInsertSuccress) echo 'Your application request has been sent successfully. Thank you!';
        else echo 'Your appointment has not been sent!';
    }

    public function edit( $email)
    {
        $patient = Patient::find($email);
        return view('admin.edit', compact('patient'));
    }
    public function update(Request $request,$email)

    {
        $patient = Patient::find($email);
        $patient->name=$request->input('name');
        $patient->phone=$request->input('phone');
        $patient->date=$request->input('date');
        $patient->treatment=$request->input('treatment');
        $patient->doctor=$request->input('doctor');
        $patient->message=$request->input('message');

        $patient->save();
        return redirect('/admin.edit')->with('success', 'Data updated successfully');
    }
    public function show(){
        $patient = Patient::all();
        return view('patient.show', compact('patient'));
    }
}
