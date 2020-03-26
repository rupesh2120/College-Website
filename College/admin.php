<!DOCTYPE html>
<html>
<head>
	<title>College project</title>
	<link rel="stylesheet" type="text/css" href="mystyle.css"/>
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
					<form action="loginadmin1.php" method="POST">
					  <table>
					   <tr>
					    <td>Username :</td>
					    <td><input type="text" name="uname" required></td>
					   </tr>
					   <tr>
    					<td>
        					&nbsp;
        					<!--you just need a space in a row-->
    					</td>
						</tr>
					   <tr>
					    <td>Password :</td>
					    <td><input type="password" name="pass" required></td>
					   </tr>
					   <tr>
    					<td>
        					&nbsp;
        					<!--you just need a space in a row-->
    					</td>
						</tr>  
					   <tr>
					    <td><input type="submit" name="submit" value="Login" style="background-color: red; color: white; padding: 10px; border-radius: 8px; width: 70px; border: 1px solid red; text-align: center;"></td>
					   </tr>
					  </table>
					 </form>

 			</div>
		</div>
	</div>



</body>
</html>



