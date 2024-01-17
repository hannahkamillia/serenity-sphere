@extends('master.layout')
@section('content')


<section id="fed" class="fed">
<section id="feedback" class="feedback section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
        <br><br><br><br>
          <h2>Feedback</h2>
          <p>Want to write something about us? Fill in your feedbacks below!</p>
        </div>

        <form action="Feedback" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          @csrf

          <div class="form-group mt-4">
            <div>
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <br>
            <div >
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>

          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">We appreciate your feedbacks. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Submit Feedback</button></div>
        </form>
      </div>
    </section><!-- End Appointment Section -->

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Testimonials</h2>
        <p>What our customer are saying...</p>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                My sessions definitely helped me a lot and I have left feeling a lot more confident for my future. I most liked the flexibility in sessions and the homework like being given tasks to think about or do for next time. Everyone is very lovely and friendly, I felt very welcomed.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                I'm really appreaciate the teamwork for developing this website. It helps me a lot by just make an online appointment rather than have to make appoinment physically. The website also user friendly.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Overall, your website has become a trusted companion on my mental health journey, and I wanted to express my gratitude for the positive impact it has had on my life. Thank you for creating a space that fosters understanding, empathy, and empowerment.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                I am very satisfied with the services here. I am changing my thought process for the better and I have learned strategies to better cope with my stress.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Serenity-Sphere has had a major positive impact on my life. With my clinician’s help, both my family and work life has improved significantly. I am fully functioning for the first time in many years.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3>John Larson</h3>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->
</section>
