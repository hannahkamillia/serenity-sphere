@extends('master.layout')

 @section('content')

 <!-- ======= Appointment Section ======= -->
 <section id="appointment" class="appointment section-bg">
    <div class="container" >

      <div class="section-title">
        <br><br><br><br>
        <h2>Make an Appointment</h2>
        <p>Booking an appointment with Serenity Sphere, a respected mental health center,
            is a personalized and confidential experience. Simply reach out to our helpline,
            express your concerns, and share your preferred consultation time. A compassionate
            professional will assist you in scheduling an appointment with a qualified mental
            health expert, tailored to your individual needs. Serenity Sphere prioritizes your
            preferences, ensuring a supportive and serene environment as you embark on your mental health journey.
     </div>

      <form action="forms/appointment.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
          <div class="col-md-4 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" required>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 form-group mt-3">
            <input type="date" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" required>
          </div>
          <div class="col-md-4 form-group mt-3">
            <select name="department" id="department" class="form-select">
              <option value="">Select Treatment</option>
              <option value="Department 1">Psychotherapy/Counseling</option>
              <option value="Department 2">Recreational Therapies</option>
              <option value="Department 3">Complementary Therapies</option>
            </select>
          </div>
          <div class="col-md-4 form-group mt-3">
            <select name="doctor" id="doctor" class="form-select">
              <option value="">Select Doctor</option>
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
          <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
        </div>
        <div class="my-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Make an Appointment</button></div>
      </form>

    </div>
  </section><!-- End Appointment Section -->

  @endsection
