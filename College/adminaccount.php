<!DOCTYPE html>
<html>
<head>
	<title>College project</title>
	<link rel="stylesheet" type="text/css" href="mystyle.css"/>
	<style>
		td{
			padding: 10px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="wrapper">
			<div>
				<img src="img/banner2-vjti.jpg"/ width="1200px">
			</div>
		</div>
	</div>
	<div class="container">
		<div class="wrapper" id="top_div">
			<div id="top_left">
				Mail:director@vjti.ac.in
			</div>
			<div id="top_right">
				Contact us: +91-22-24198102
			</div>
			<div id="clear">
			</div>
		</div>
	</div>
	<div class="container">
		<div class="wrapper1 light">
			<ul>
				<li><a href="admin.php">Admin</a></li>
				<li><a href="register.php">Register</a></li>
				<li><a href="studentlogin.php">Student Login</a></li>
			</ul>
		</div>
	</div>

<div class="container">
    <div class="wrapper2">
      <div>
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
				    	$query= "SELECT * FROM register";
				    	$result= mysqli_query($conn, $query);
				    	$n=mysqli_num_rows($result);
				    	//$data= mysqli_fetch_assoc($result);
						echo	"<table border=1>
				    			<tr> 
				    				<th>First Name</th>
				    				<th>Middle Name</th>
				    				<th>Last Name</th>
				    				<th>Registration ID</th>
				    				<th>Gender</th>
				    				<th>Email</th>
				    				<th>Graduation</th>
				    				<th>Department</th>
				    				<th>Mobile</th>
				    				<th>DOB</th>
				    				<th>Operation</th>
				    			</tr>";
				    			while ($data= mysqli_fetch_array($result)) {
				    					echo "<tr>";
				    					echo 	"<td>".$data['first']."</td>";
				    					echo	"<td>".$data['middle']."</td>";
				    					echo	"<td>".$data['last']."</td>";
				    					echo	"<td>".$data['id']."</td>";
				    					echo	"<td>".$data['gender']."</td>";
				    					echo	"<td>".$data['email']."</td>";
				    					echo	"<td>".$data['grad']."</td>";
				    					echo	"<td>".$data['dept']."</td>";
				    					echo	"<td>".$data['mobile']."</td>";
				    					echo	"<td>".$data['dob']."</td>";
				    					echo	"<td><a href='operation.php?fn=$data[first]&mn=$data[middle]&ln=$data[last]&id=$data[id]&gn=$data[gender]&em=$data[email]&gr=$data[grad]&dp=$data[dept]&mb=$data[mobile]&dob=$data[dob]' onclick='return checkdelete()'>Approve</a></td>";
				    					echo	"</tr>";
				    				}
				    				echo "</table>";
						?>
						</div>
   					 </div>
  				</div>
  				<script type="text/javascript">
  					function checkdelete()
  					{
  						return confirm("Are you sure to delete data?");
  					}
  				</script>
  					<table>
					   <tr>
					    <td>&nbsp;</td>
					   </tr>
					</table>
					<table>
					   <tr>
					    <td>&nbsp;</td>
					   </tr>
					</table>
<div class="container">
    <div class="wrapper3 button">
      <div>
        <form action="logout.php" method="POST"> 
        <input id="button" type="submit" name="submit" value="Logout" style="background-color: red; color: white; padding: 10px; border-radius: 8px; width: 70px; border: 1px solid red; text-align: center;">
        </form>

      </div>
    </div>
  </div>
</body>
</html>
    	  