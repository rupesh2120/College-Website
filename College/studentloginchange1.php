
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
	<table>
					   <tr>
					    <td>&nbsp;</td>
					   </tr>
					</table>
<div class="container">
    <div class="wrapper2">
      <div>
      	<p style="color: black; font-size: 20px; font-style: bold; text-align: center;">Change your Password</p>
      	</div>
    </div>
  </div>

<div class="container">
    <div class="wrapper2">
      <div>
      		<form action="Changepass.php" method="POST">
					  <table>
					   <tr>
					    <td>Registration ID :</td>
					    <td><input type="text" name="rid" required></td>
					   </tr>
					   <tr>
    					<td>
        					&nbsp;
        					<!--you just need a space in a row-->
    					</td>
						</tr>
					   <tr>
					    <td>New Password :</td>
					    <td><input type="password" name="npass" required></td>
					   </tr>
					   <tr>
    					<td>
        					&nbsp;
        					<!--you just need a space in a row-->
    					</td>
						</tr> 
						<tr>
					    <td>Confirm Password :</td>
					    <td><input type="password" name="cpass" required></td>
					   </tr>
					   <tr>
    					<td>
        					&nbsp;
        					<!--you just need a space in a row-->
    					</td>
						</tr>  
					   <tr>
					    <td><input type="submit" name="submit" value="Change Password" style="background-color: red; color: white; padding: 10px; border-radius: 8px; width: 170px; border: 1px solid red; text-align: center;"></td>
					   </tr>
					  </table>
					 </form>

      </div>
    </div>
  </div>

					<table>
					   <tr>
					    <td>&nbsp;</td>
					   </tr>
					</table>
<div class="container">
    <div class="wrapper3 button">
      <div>
        <form action="studentlogout.php" method="POST"> 
        <input id="button" type="submit" name="submit" value="Logout" style="background-color: red; color: white; padding: 10px; border-radius: 8px; width: 70px; border: 1px solid red; text-align: center;">
        </form>

      </div>
    </div>
  </div>
</body>
</html>
    	  
