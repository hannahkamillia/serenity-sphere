@extends('master.admin-navi')

@section('content')



<div class="container" >

   <div class="text-center mb-4">
      <h2>Edit Patient</h2>
   </div>

   <!--/div
   ?php
   $email = $_GET['email'];
   $sql =" SELECT * FROM 'patient' where email =$email LIMIT 1";
   $result = mysqli_query($data, $sql);
   $row = mysqli_fetch_assoc($result);
   ?-->
   <?php
   // Assuming you are using Laravel's routing and not relying on $_GET
   $email = request('email');

   // Add proper validation to ensure $email is not null before proceeding
   if ($email) {
       $sql = "SELECT * FROM `patient` WHERE email = '$email' LIMIT 1";
       $result = mysqli_query($data, $sql);
       $row = mysqli_fetch_assoc($result);
   } else {
       // Handle the case when $email is not set
       abort(404);
   }
   ?>

<div class="container d-flex justify-content-center">
    <form action="/patients/{{$patient->email}}" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="col-md-4 form-group">
          <input type="text" name="name" class="form-control" id="name" value="{{$patient->name}}" required>
        </div>
        <div class="col-md-4 form-group mt-3 mt-md-0">
          <input type="email" class="form-control" name="email" id="email" value="{{$patient->email}}" required>
        </div>
        <div class="col-md-4 form-group mt-3 mt-md-0">
          <input type="tel" class="form-control" name="phone" id="phone" value="{{$patient->phone}}" required>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 form-group mt-3">
          <input type="date" name="date" class="form-control datepicker" id="date" value="{{$patient->date}}" required>
        </div>
        <div class="col-md-4 form-group mt-3">
          <select name="treatment" id="treatment" class="form-select" value="{{$patient->treatment}}">
            <option value="">Select Treatment</option>
            <option value="Treatment 1">Psychotherapy</option>
            <option value="Treatment 2">Cognitive Behavioral Therapy</option>
            <option value="Treatment 3">Dialectical Behavior Therapy</option>
            <option value="Treatment 4">Psychoeducational</option>
          </select>
        </div>
        <div class="col-md-4 form-group mt-3">
          <select name="doctor" id="doctor" class="form-select" value="{{$patient->doctor}}">
            <option value="">Select Therapist</option>
            <option value="Doctor 1">Dr. Elara Mercer</option>
            <option value="Doctor 2">Dr. Orion Blackwood</option>
            <option value="Doctor 3">Dr. Seraphina Rose</option>
            <option value="Doctor 4">Dr. Jasper Thornfield</option>
            <option value="Doctor 5">Dr. Luna Evergreen</option>
            <option value="Doctor 6">Dr. Felix Sinclair</option>
          </select>
        </div>
      </div>

      <div class="form-group mt-3">
        <textarea class="form-control" name="message" rows="5" value="{{$patient->message}}"></textarea>
      </div>
      <div class="my-3">
        <div class="loading">Loading</div>
        <div class="error-message"></div>
        <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
      </div>
      <div class="text-center"><button type="submit">Submit the Appointment</button></div>
    </form>
</div>

  </div>
