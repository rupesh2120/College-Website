<?php
	$host = "localhost";
 	$dbUsername = "root"; 
	$dbPassword = "";
	$dbname = "college";
	//create connection
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
	if (!$conn) {
		die("connection required".mysqli_connect_error());
	 }
	$fname = $_GET['fn'];
	$mname = $_GET['mn'];
	$lname = $_GET['ln'];
	$rid = $_GET['id'];
	$gender = $_GET['gn'];
	$email = $_GET['em'];
	$grd = $_GET['gr'];
	$dpt = $_GET['dp'];
	$phone = $_GET['mb']; 
	$dob = $_GET['dob'];
	$f= substr($fname,0,1);
	if ($mname) {
		$m= substr($mname, 0,1);
	}
	else
	{
		$m= NULL;  
	}
	$l= strtolower($lname);
	$f1=lcfirst($f);
	$m1=lcfirst($m);
	$r1=substr($rid,0,2);
	$y=substr($dob,0,4);
	$mn=substr($dob,-5,-3);
	$d=substr($dob, 8,10);
	$dp1=substr($dpt,0,1);
	$dp2=lcfirst($dp1);
	//echo $mn;
	$dob1= $y.$mn.$d;
	//echo $dob1;
	if ($grd=='Diploma') {
		$vjti_email = $f1.$m1.$l.'_'.'d'.$r1.'@'.$dp2.'e'.'.'.'vjti'.'.'.'ac'.'.'.'in';
	}
	elseif ($grd=='UG') {
		$vjti_email = $f1.$m1.$l.'_'.'b'.$r1.'@'.$dp2.'e'.'.'.'vjti'.'.'.'ac'.'.'.'in';
	}
	elseif ($grd=='PG') {
		$vjti_email = $f1.$m1.$l.'_'.'m'.$r1.'@'.$dp2.'e'.'.'.'vjti'.'.'.'ac'.'.'.'in';
	}
	elseif ($grd=='Phd') {
		$vjti_email = $f1.$m1.$l.'_'.'p'.$r1.'@'.$dp2.'e'.'.'.'vjti'.'.'.'ac'.'.'.'in';
	}
	else{
		$vjti_email = $f1.$m1.$l.'_'.'a'.$r1.'@'.$dp2.'e'.'.'.'vjti'.'.'.'ac'.'.'.'in';
	}
	 $password = $l.$f1.$d.$y;
	// $password= (int)$password1;
	  //$msg = "Username :".$vjti_email."\n"."Password :".$password;
	  //echo $msg;
	 $to = $email;
	 $subject = "Your credentials for VJTI internet";
	 $msg = "Username :".$vjti_email."\n". "Password :".$password;
	 $headers = "From: sharmarupesh2120@gmail.com";
	 if (mail($to,$subject,$msg,$headers)) {
	 	echo "mail has been send";
	 }
	 else {
	 	echo "Failed";
	 }
	 $SELECT = "SELECT email From credentials Where email = ? Limit 1";
     $INSERT = "INSERT Into credentials (first, middle, last, id, gender, email, grad, dept, mobile, dob,vjti_email,pass) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
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
      $stmt->bind_param("sssissssiiss", $fname, $mname, $lname, $rid, $gender, $email, $grd, $dpt, $phone, $dob1, $vjti_email, $password);
      $stmt->execute();
      echo "New record inserted sucessfully";
      ?>

	 	<meta http-equiv="Refresh" content="5; url=http://localhost/College/adminaccount.php"/>

	 	<?php
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();

?>
<?php
	$host = "localhost";
 	$dbUsername = "root"; 
	$dbPassword = "";
	$dbname = "college";
	//create connection
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
	if (!$conn) {
		die("connection required".mysqli_connect_error());
	 }
	 $rid = $_GET['id'];
	 $query = "DELETE From register Where id = '$rid'";
	 $data = mysqli_query($conn, $query);
	 if ($data) {
	 	echo "<script>alert('deleted successfully')</script>";
	 	?>

	 	<meta http-equiv="Refresh" content="5; url=http://localhost/College/adminaccount.php"/>

	 	<?php
	 }
	 else{
	 	echo "failed delete";
	 }
?>
