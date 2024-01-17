<?php
$data = mysqli_connect("localhost","root","","medicio");

require_once('C:/xampp/htdocs/serenity-sphere/config/data.php');
$query="select * from patient";
$result = mysqli_query($data , $query);
$query2="select * from join_us";
$result2 = mysqli_query($data , $query2);

?>

@extends('master.admin-navi')

@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/therapy2.jpg)">
          <div class="container">
          <h2>Welcome <span>Admin</span></h2>
            <p>You are now logged in as admin</p>

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
                <h4 class="card-title">Patient Bookings</h4>
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
                                            <td><?php echo $row ['doctor'];?></td>
                                            <td><?php echo $row ['treatment'];?></td>
                                            <td><?php echo $row ['message'];?></td>
                                            <td><a href="#" class="btn btn-primary editbtn">Edit</a></td>
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

<section id="job">
    <div class="row">
      <div class="call-md-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Job Applications</h4>
              </div>
              <div class="card-body">
                  <div class="table responsive">
                      <table class="table">
                          <thead class="text-primary">
                              <th>Name</th>
                              <th>Email</th>
                              <th>Phone</th>
                              <th>Position</th>
                              <th>Message</th>
                              <th>EDIT</th>
                              <th>DELETE</th>
                          </thead>
                          <tbody>
                              <tr>
                                  <?php
                                      while($row = mysqli_fetch_assoc($result2))
                                      {
                                          ?>
                                              <td><?php echo $row ['name'];?></td>
                                              <td><?php echo $row ['email'];?></td>
                                              <td><?php echo $row ['phone'];?></td>
                                              <td><?php echo $row ['position'];?></td>

                                              <td><?php echo $row ['message'];?></td>
                                              <td><a href="#" class="btn btn-primary editbtn">Edit</a></td>
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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function () {
            $('.editbtn').on('click', function() {

                $('#editpatient').modal('show');

            });

        });
    </script>
<!--#######################################################################-->



<div class="modal fade" id="editpatient" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Edit Patient Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>




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
 </div>

</div>

<!--#######################################################################################################-->

@endsection

