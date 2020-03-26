<?php
$uname = $_POST['uname'];
$pass = $_POST['pass'];
if (!empty($uname) || !empty($pass)) {
 	$host = "localhost";
    $dbUsername = "root"; 
    $dbPassword = "";
    $dbname = "college";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {

$sql = "SELECT * FROM credentials WHERE vjti_email='$uname' AND pass='$pass'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$pass = $row["pass"];
		$uname = $row["vjti_email"];
		session_start();
		$_SESSION['pass'] = $pass;
		$_SESSION['uname'] = $uname;
	}
	header("Location: studentloginchange1.php");
}
else
{
	echo "Invalid email or password";
}
}
}
?>