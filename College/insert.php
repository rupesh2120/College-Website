<?php
$fname = $_GET['fname'];
$mname = $_GET['mname'];
$lname = $_GET['lname'];
$rid = $_GET['rid'];
$gender = $_GET['gender'];
$email = $_GET['email'];
$grd = $_GET['grd'];
$dpt = $_GET['dpt'];
$phone = $_GET['phone']; 
$dob = $_GET['dob'];
if (!empty($fname) || !empty($mname) || !empty($lname) || !empty($rid) || !empty($gender) || !empty($email) || !empty($grd)|| !empty($dpt)|| !empty($phone)|| !empty($dob)) {
 	$host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "college";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From register Where email = ? Limit 1";
     $INSERT = "INSERT Into register (first, middle, last, id, gender, email, grad, dept, mobile, dob) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssissssii", $fname, $mname, $lname, $rid, $gender, $email, $grd, $dpt, $phone, $dob);
      $stmt->execute();
      echo "New record inserted sucessfully";

     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 
 die();
} 



