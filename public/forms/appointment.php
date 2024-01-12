<?php


  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  /**Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'contact@example.com';

  include( '../assets/vendor/php-email-form/php-email-form.php' );

  include( __DIR__ . '/../assets/vendor/php-email-form/php-email-form.php' );



  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
     die( 'Unable to load the "PHP Email Form" Library!');
  }

  $appointment = new PHP_Email_Form;
  $appointment->ajax = true;

  $appointment->to = $receiving_email_address;
  $appointment->from_name = $_POST['name'];
  $appointment->from_email = $_POST['email'];
  $appointment->subject = 'Online Appointment Form';

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  /*$patient=$_POST['name'];
  $patient=$_POST['email'];
  $patient=$_POST['phone'];
  $patient=$_POST['date'];
  $patient=$_POST['treatment'];
  $patient=$_POST['doctor'];
  $patient=$_POST['message'];


  /*$name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $date=$_POST['date'];
  $treatment=$_POST['treatment'];
  $doctor=$_POST['doctor'];
  $message=$_POST['message'];*/

  /*$host="localhost";
  $dbname="medicio";
  $username="root";
  $password="";

/*if (mysqli_connect_errno()) {
    die("Connection Error:" . mysqli_connect_error());
}

echo "Connection Successful";*/

/*$sql = "INSERT INTO patient (name, email, phone, date, treatment, doctor, message) VALUES ('$name', '$email', '$phone', '$date', '$treatment', '$doctor', '$message')";

$stmt = mysqli_stmt_init($conn);

if (! mysqli_stmt_prepare($stmt, $sql)){
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ssidtsss",$name, $email, $phone, $date, $treatment, $doctor, $message);

mysqli_stmt_execute($stmt);
echo "Record Save";

  //echo $patient->send();*/
?>
