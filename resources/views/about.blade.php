 @extends('master.layout')

 @section('content')

 <!-- ======= About Us Section ======= -->
 <section id="about" class="about">
      <div class="container">

        <div class="section-title">
            <br><br><br><br>
          <h2>About Us</h2>
          <p>At SerenitySphere, we believe in the transformative power of well-being. In a world filled with constant demands and stresses, we recognize the need for a sanctuary that fosters healing and tranquility. SerenitySphere is more than just a therapy website – it's a refuge where individuals embark on a journey towards mental, emotional, and spiritual well-being.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="assets/img/aboutus1.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div>

    </div>
    </section><!-- End About Us Section -->

    <section id="joinus" class="joinus section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Join Us</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <form action="Join" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
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
              <select name="position" id="position" class="form-select">
                <option value="">Select Position</option>
                <option value="Position 1">Receptionist</option>
                <option value="Position 2">Child Therapist</option>
                <option value="Position 3">Senior Counselor</option>
                <option value="Position 4">Human Resources</option>
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
          <div class="text-center"><button type="submit">Submit Application</button></div>
        </form>

      </div>
    </section><!-- End Appointment Section -->
  </section><!-- End Appointment Section -->

@endsection
