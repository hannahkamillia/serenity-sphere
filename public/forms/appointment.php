<?php

if(isset($_POST["submit"])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $date=$_POST['date'];
    $treatment=$_POST['treatment'];
    $doctor=$_POST['doctor'];
    $message=$_POST['message'];

    if (!empty($name) && !empty($email) && !empty($phone) && !empty($date) && !empty($treatment) && !empty($doctor)){
        $link = mysqli_connnect("localhost", "root", "", "database");
        if($link==false){
            die(mysqli_connect_error());
        }
        $sql = "INSERT INTO patient (name, email, phone, date, treatment, doctor, message) VALUES ('$name', '$email', '$phone', '$date', '$treatment', '$doctor', '$message')";
        if (mysqli_query($link,$sql)){
            echo "Recorde inserted";

        }else{
            echo "Something went wrong";
        }

    }else{
        echo "Please provide all information";
    }
  }


  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  //$receiving_email_address = 'contact@example.com';

  //if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
   // include( $php_email_form );
  //} else {
  ////  die( 'Unable to load the "PHP Email Form" Library!');
  //}

  //$contact = new PHP_Email_Form;
  //$contact->ajax = true;

  //$contact->to = $receiving_email_address;
  //$contact->from_name = $_POST['name'];
  ////$contact->from_email = $_POST['email'];
  //$contact->subject = 'Online Appointment Form';

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  /*$contact->add_message( $_POST['name'], 'Name');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['phone'], 'Phone');
  $contact->add_message( $_POST['date'], 'Appointment Date');
  $contact->add_message( $_POST['treatment'], 'Treatment');
  $contact->add_message( $_POST['doctor'], 'Doctor');
  $contact->add_message( $_POST['message'], 'Message');*/


  /*$name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $date=$_POST['date'];
  $treatment=$_POST['treatment'];
  $doctor=$_POST['doctor'];
  $message=$_POST['message'];*/

 /* $host="localhost";
  $dbname="medicio";
  $username="root";
  $password="";*/


 /*

if (mysqli_connect_errno()) {
    die("Connection Error:" . mysqli_connect_error());
}

echo "Connection Successful";

$sql = "INSERT INTO patient (name, email, phone, date, treatment, doctor, message) VALUES ($name, $email, $phone, $date, $treatment, $doctor, $message)";

$stmt = mysqli_stmt_init($conn);

if (! mysqli_stmt_prepare($stmt, $sql)){
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ssidtsss",$name, $email, $phone, $date, $treatment, $doctor, $message);

mysqli_stmt_execute($stmt);
echo "Record Save";*/

  /*echo $contact->send();*/
?>
