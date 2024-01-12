@extends('master.layout')
@section('content')

<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/therapy1.jpg)">
          <div class="container">
          <h2>Make an <span>Appointment</span></h2>
            <p>Booking an appointment with Serenity Sphere, a respected mental health center,
                is a personalized and confidential experience. Simply reach out to our helpline,
                express your concerns, and share your preferred consultation time. A compassionate
                professional will assist you in scheduling an appointment with a qualified mental
                health expert, tailored to your individual needs. Serenity Sphere prioritizes your
                preferences, ensuring a supportive and serene environment as you embark on your mental health journey.</p>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/therapy2.jpg)">
          <div class="container">
            <h2>Make an <span>Appointment</span></h2>
            <p>Booking an appointment with Serenity Sphere, a respected mental health center,
                is a personalized and confidential experience. Simply reach out to our helpline,
                express your concerns, and share your preferred consultation time. A compassionate
                professional will assist you in scheduling an appointment with a qualified mental
                health expert, tailored to your individual needs. Serenity Sphere prioritizes your
                preferences, ensuring a supportive and serene environment as you embark on your mental health journey.</p>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/therapy3.jpg)">
          <div class="container">
            <h2>Make an <span>Appointment</span></h2>
            <p>Booking an appointment with Serenity Sphere, a respected mental health center,
                is a personalized and confidential experience. Simply reach out to our helpline,
                express your concerns, and share your preferred consultation time. A compassionate
                professional will assist you in scheduling an appointment with a qualified mental
                health expert, tailored to your individual needs. Serenity Sphere prioritizes your
                preferences, ensuring a supportive and serene environment as you embark on your mental health journey.</p>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section>

 <!-- ======= Appointment Section ======= -->
 <section id="appointment" class="appointment section-bg">
    <div class="container" >

      <!--div class="section-title">
        <h2>Make an Appointment</h2>
        <p>Booking an appointment with Serenity Sphere, a respected mental health center,
            is a personalized and confidential experience. Simply reach out to our helpline,
            express your concerns, and share your preferred consultation time. A compassionate
            professional will assist you in scheduling an appointment with a qualified mental
            health expert, tailored to your individual needs. Serenity Sphere prioritizes your
            preferences, ensuring a supportive and serene environment as you embark on your mental health journey.</p>
     </div-->

      <form action="booking" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
        @csrf
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
            <input type="date" name="date" class="form-control datepicker" id="date" placeholder="Pick Date for Appointment" required>
          </div>
          <div class="col-md-4 form-group mt-3">
            <select name="treatment" id="treatment" class="form-select">
              <option value="">Select Treatment</option>
              <option value="Treatment 1">Psychotherapy</option>
              <option value="Treatment 2">Cognitive Behavioral Therapy</option>
              <option value="Treatment 3">Dialectical Behavior Therapy</option>
              <option value="Treatment 4">Psychoeducational</option>
            </select>
          </div>
          <div class="col-md-4 form-group mt-3">
            <select name="doctor" id="doctor" class="form-select">
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
          <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
        </div>
        <div class="my-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Submit the Appointment</button></div>
      </form>

    </div>
  </section>
  <!-- End Appointment Section -->

  @endsection
