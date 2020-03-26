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
	 $query= "SELECT * FROM credentials";
	 $result= mysqli_query($conn, $query);
	 $data= mysqli_fetch_assoc($result);
	 $rid1=$data['id'];
	 if (isset($_POST['submit'])) {
	 	$id1=$_POST['rid'];
	 	$new=$_POST['npass'];
	 	$con=$_POST['cpass'];
	 	if ($id1==$rid1) {
	 		if ($new==$con) {
	 			$update="update credentials set pass='$new' where id='$id1'";
	 			$query=mysqli_query($conn, $update);
	 			if ($query) {
	 				echo "Your password changed successfully";
	 				?>

	 	<meta http-equiv="Refresh" content="2; url=http://localhost/College/studentloginchange1.php"/>

	 	<?php
	 			}
	 		}
	 		else{
	 			echo "Your both password didn't match";

	 			?>

	 	<meta http-equiv="Refresh" content="5; url=http://localhost/College/studentloginchange1.php"/>

	 	<?php
	 		}
	 	}
	 	else{
	 		echo "You have entered wrong registration id";

	 		?>

	 	<meta http-equiv="Refresh" content="5; url=http://localhost/College/studentloginchange1.php"/>

	 	<?php
	 	}
	 }
?>
