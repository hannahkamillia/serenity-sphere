@extends('master.layout')

@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide1.jpg)">
          <div class="container">
          <h2>Welcome to <span>Serenity Sphere</span></h2>
            <p>Breathe. Believe. Be well. Start your journey to serenity at Serenity Sphere.</p>
            <a href="{{ route('login') }}" class="btn-get-started scrollto">Join Us</a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
          <div class="container">
            <h2>Your Voice Matters</h2>
            <p>We have been providing the care and help to many of our patients, see what they say about us.</p>
            <a href="{{ route('feedback') }}" class="btn-get-started scrollto">Feedback</a>
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

  @endsection
