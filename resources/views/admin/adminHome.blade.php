<?php
$data = mysqli_connect("localhost","root","","medicio");
require_once('C:/xampp/htdocs/serenity-sphere/config/data.php');
$query="select * from patient";
$result = mysqli_query($data , $query);


?>

@extends('master.admin-navi')

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
            <h2>Lorem Ipsum Dolor</h2>
            <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel.</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
          <div class="container">
            <h2>Sequi ea ut et est quaerat</h2>
            <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel.</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
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

  <section id="table">
  <div class="row">
    <div class="call-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Bookings</h4>
            </div>
            <div class="card-body">
                <div class="table responsive">
                    <table class="table">
                        <thead class="text-primary">
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Date</th>
                            <th>Doctor</th>
                            <th>Treatment</th>
                            <th>Message</th>
                            <th>EDIT</th>
                            <th>DELETE</th>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                        ?>
                                            <td><?php echo $row ['name'];?></td>
                                            <td><?php echo $row ['email'];?></td>
                                            <td><?php echo $row ['phone'];?></td>
                                            <td><?php echo $row ['date'];?></td>
                                            <td><?php echo $row ['treatment'];?></td>
                                            <td><?php echo $row ['doctor'];?></td>
                                            <td><?php echo $row ['message'];?></td>
                                            <td><a href="#" class="btn btn-primary">Edit</a></td>
                                            <td><a href="#" class="btn btn-danger">Delete</a></td>
                            </tr>
                                <?php
                                    }
                                ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
</section>

@endsection

