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

$sql = "SELECT * FROM admin WHERE username='$uname' AND password='$pass'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$pass = $row["password"];
		$uname = $row["username"];
		session_start();
		$_SESSION['pass'] = $pass;
		$_SESSION['uname'] = $uname;
	}
	header("Location: adminaccount.php");
}
else
{
	echo "Invalid email or password";
}
}
}
?>