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

        <br><br>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="assets/img/therapy3.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Your Sanctuary for Healing.</h3><br>
            <p class="fst-italic">
            Welcome to "Your Sanctuary for Healing," where we understand that the journey to mental well-being is unique for each individual. In this safe haven, we offer a compassionate space where healing is nurtured and celebrated.
             Our platform is designed with your emotional wellness in mind, providing a refuge from the challenges life may present.
            </p><br>
            <ul>
              <li><i class="bi bi-check-circle"></i> Founded in 2023 in Kuala Lumpur, Malaysia by a group of IIUM IT students.</li>
              <li><i class="bi bi-check-circle"></i> We value the role of mental health and advocate for more readily available resources.</li>
              <li><i class="bi bi-check-circle"></i> Currently located in the city centre, but the future holds for more Serenity Sphere branches across the country.</li>
            </ul>
            <p>
                فَإِنَّ مَعَ ٱلْعُسْرِ يُسْرًا ٥
                إِنَّ مَعَ ٱلْعُسْرِ يُسْرًۭا ٦
                <br>“For indeed, with hardship [will be] ease. Surely with ˹that˺ hardship comes ˹more˺ ease.”  --Surah al-Inshirah
            </p>
          </div>
        </div>

    </div>
    </section><!-- End About Us Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Gallery</h2>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/g1.jpg"><img src="assets/img/gallery/g1.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/g2.jpg"><img src="assets/img/gallery/g2.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/g3.jpg"><img src="assets/img/gallery/g3.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/g4.jpg"><img src="assets/img/gallery/g4.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-5.jpeg"><img src="assets/img/gallery/gallery-5.jpeg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-6.jpeg"><img src="assets/img/gallery/gallery-6.jpeg" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->

    <section id="joinus" class="joinus section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Join Us</h2>
          <p>Whether you're seeking therapy, mindfulness resources, or simply a community that understands your journey, SerenitySphere welcomes you with open arms. Together, let's explore the boundless possibilities of well-being and build a foundation for a more serene and fulfilling life.



Thank you for choosing SerenitySphere – where your journey to serenity begins.</p>
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
