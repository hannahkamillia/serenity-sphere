<?php

namespace App\Http\Controllers;
use Illuminte\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('feedback');
    }
    public function Feedback(Request $request)
    {
      $name = $request ->input('name');
      $email = $request ->input('email');
      $message = $request ->input('message');

      $isInsertSuccress = Feedback::insert(['name'=>$name,
                                          'email'=>$email,
                                          'message'=>$message]);
      if($isInsertSuccress) echo 'Your feedback form has been sent successfully. Thank you!';
      else echo '<h1>Insert Failed<\h1>';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
