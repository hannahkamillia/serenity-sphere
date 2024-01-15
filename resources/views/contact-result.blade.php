@extends('master.layout')
@section('content')

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <br><br><br><br>
        <h2>Contact</h2>

      </div>

    </div>

    <div>
      <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="container">

      <div class="row mt-5">

        <div class="col-lg-6">

          <div class="row">
            <div class="col-md-12">
              <div class="info-box">
                <i class="bx bx-map"></i>
                <h3>Our Address</h3>
                <p>9th Floor, Wisma Genting, Jalan Sultan Lumpur 50250 Malaysia</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-envelope"></i>
                <h3>Email Us</h3>
                <p>info@serenitysphere.com<br>contact@gmail.com</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-phone-call"></i>
                <h3>Call Us</h3>
                <p>+603 4054 7774<br>+6019 999 3710</p>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">
            <form action="{{ route('contact') }}" method="post" role="form" class="php-email-form">
                @csrf <!-- CSRF token -->

              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="7" placeholder="Message" required=""></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>


      </div>

    </div>
  </section><!-- End Contact Section -->

    <!-- ======= Frequently Asked Questioins Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Frequently Asked Questioins</h2>
            <p>The most common questions about our organisation answered on this page! Not finding the answer you're looking for? If you have any other general queries on SerenitySphere, simply submit the conatact form here and we'll get back to you shortly.</p>
          </div>

          <ul class="faq-list">

            <li>
              <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">What is SerenitySphere? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                <p>
                    Founded in 2023, SerenitySphere is an organisation devoted to provide our users and customers with useful mental health resources. This goal roots back to our own experience going through our mental health journey and we hope you find our platform useful as we would have found it back then!
                </p>
              </div>
            </li>

            <li>
              <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">How do I talk to one of SerenitySphere's therapists?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                <p>
                    You can connect with our licensed professionals via video chat or in-person! Assessing emotional support and guidance from the comfort of their own space. This platform offers flexibility for individuals seeking mental health health support on SerenitySphere's user-friendly and secure website.
                </p>
              </div>
            </li>

            <li>
              <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Can I visit the office physically? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                <p>
                    Of course! Just drop by to one of our SerenitySphere centres (across the country) and we'll be happy to welcome you with a bright smile.                </p>
              </div>
            </li>

            <li>
              <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">How can I join SerenitySphere as a therapist?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  In order to reflect our company's goal and vision, we strive to recruit/hire the best professionals to serve our customers. If you want to join our loving family, do submit the recruitment form located in at the 'About' page.
                </p>
              </div>
            </li>
          </ul>

        </div>
      </section>
      <!-- End Frequently Asked Questions Section -->

@endsection
