<?php
// session_start();
// include('connection.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
 


$fname = $_POST['fname'];
$lname = $_POST['lname'];
  $email = $_POST['email'];
  $mob = $_POST['mob'];
  $msg = $_POST['msg'];
  
  $to_email = "vinitasharma2019@gmail.com";
  $subject = "Mail from Pharmacy site";
  $txt =" First name: ". $fname."\r\n Last name: ". $lname . "\r\n Email: ". $email . "\r\n Mobile: ". $mob . "\r\n Message: ". $msg ;
  

  $mailheaders = "From: $email\
  ";
  $mailheaders .= "To: vinitasharma2019@gmail.com\
  ";
  $mailheaders .= "Content-Type: multipart/mixed; \
  ";


$sql ="insert into contact_us(fname,lname,email,mob,msg)values('$fname','$lname','$email','$mob','$msg')";
 $conn->exec($sql);
   if(mail($to_email, $subject, $txt, $mailheaders))
   {
    header("Location:sendmsg.php");   
   }
   else{
    
    header("Location:errorpage.php");
   }
?>