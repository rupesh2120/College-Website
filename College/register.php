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
					<form action="insert.php" method="GET">
					  <table>
					   <tr>
					    <td>First Name :</td>
					    <td><input type="text" name="fname" required></td>
					   </tr>
					   <tr>
    					<td>
        					&nbsp;
        					<!--you just need a space in a row-->
    					</td>
						</tr>
					   <tr>
					    <td>Middle Name :</td>
					    <td><input type="text" name="mname" ></td>
					   </tr>
					   <tr>
    					<td>
        					&nbsp;
        					<!--you just need a space in a row-->
    					</td>
						</tr>
						<tr>
					    <td>Last Name :</td>
					    <td><input type="text" name="lname" required></td>
					   </tr>
					   <tr>
    					<td>
        					&nbsp;
        					<!--you just need a space in a row-->
    					</td>
						</tr>
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
					    <td>Gender :</td>
					    <td>
					     <input type="radio" name="gender" value="m" required>Male
					     <input type="radio" name="gender" value="f" required>Female
					    </td>
					   </tr>
					   <tr>
    					<td>
        					&nbsp;
        					<!--you just need a space in a row-->
    					</td>
						</tr>
					   <tr>
					    <td>Email :</td>
					    <td><input type="email" name="email" required></td>
					   </tr>
					   <tr>
    					<td>
        					&nbsp;
        					<!--you just need a space in a row-->
    					</td>
						</tr> 
					   <tr>
					    <td>Graduation :</td>
					    <td>
					     <select name="grd" required>
					      <option selected hidden value="">Select</option>
					      <option value="Diploma">Diploma</option>
					      <option value="UG">UG</option>
					      <option value="PG">PG</option>
					      <option value="MCA">MCA</option>
					      <option value="Phd">Phd</option>
					     </select>
					 	</td>
					 	</tr>
					 	<tr>
    					<td>
        					&nbsp;
        					<!--you just need a space in a row-->
    					</td>
						</tr>
						<tr>
					    <td>Department :</td>
					    <td>
					     <select name="dpt" required>
					      <option selected hidden value="">Select Department</option>
					      <option value="-----------------------Diploma-----------------------">-----------------------Diploma-----------------------</option>
					      <option value="Civil Engineering">Civil Engineering</option>
					      <option value="Electrical Engineering">Electrical Engineering</option>
					      <option value="Electronics Engineering">Electronics Engineering</option>
					      <option value="Mechanical Engineering">Mechanical Engineering</option>
					      <option value="Textile Manufactures">Textile Manufactures</option>
					      <option value="Chemical Engineering">Chemical Engineering</option>
					      <option value="-----------------------UG-----------------------">-----------------------UG-----------------------</option>
					      <option value="Civil Engineering">Civil Engineering</option>
					      <option value="Computer Engineering">Computer Engineering</option>
					      <option value="Electrical Engineering">Electrical Engineering</option>
					      <option value="Electronics Engineering">Electronics Engineering</option>
					      <option value="Electronics & Tele Communication Engineering">Electronics & Tele Communication Engineering</option>
					      <option value="Information Technology">Information Technology</option>
					      <option value="Mechanical Engineering">Mechanical Engineering</option>
					      <option value="Production Engineering">Production Engineering</option>
					      <option value="Textile Technology">Textile Technology</option>
					      <option value="-----------------------PG-----------------------">-----------------------PG-----------------------</option>
					      <option value="Civil Engineering (with specialization in Construction Management)">Civil Engineering (with specialization in Construction Management)</option>
					      <option value="Civil Engineering (with specialization in Environmental Engineering)">Civil Engineering (with specialization in Environmental Engineering)</option>
					      <option value="Civil Engineering (with specialization in Structural Engineering )">Civil Engineering (with specialization in Structural Engineering )</option>
					      <option value="Computer Engineering">Computer Engineering</option>
					      <option value="Computer Engineering (with specialization in Network Infrastructure Management Systems)">Computer Engineering (with specialization in Network Infrastructure Management Systems)</option>
					      <option value="Computer Engineering (with specialization in Software Engineering)">Computer Engineering (with specialization in Software Engineering)</option>
					      <option value="Electrical Engineering (with specialization in Power Systems)">Electrical Engineering (with specialization in Power Systems)</option>
					      <option value="Electrical Engineering (with specialization in Control Systems)">Electrical Engineering (with specialization in Control Systems)</option>
					      <option value="Electronics Engineering">Electronics Engineering</option>
					      <option value="Electronics & Telecommunication Engineering">Electronics & Telecommunication Engineering</option>
					      <option value="Mechanical Engineering (with specialization in Machine Design)">Mechanical Engineering (with specialization in Machine Design)</option>
					      <option value="Mechanical Engineering (with specialization in Automobile Engineering)">Mechanical Engineering (with specialization in Automobile Engineering)</option>
					      <option value="Mechanical Engineering (with specialization CAD/CAM & Automation)">Mechanical Engineering (with specialization CAD/CAM & Automation)</option>
					      <option value="Mechanical Engineering (with specialization in Thermal Engineering)">Mechanical Engineering (with specialization in Thermal Engineering)</option>
					      <option value="Production Engineering">Production Engineering</option>
					      <option value="Project Management">Project Management</option>
					      <option value="Textile Technology">Textile Technology</option>
					      <option value="-----------------------Phd-----------------------">-----------------------Phd-----------------------</option>
					      <option value="Phd">Phd</option>
					      <option value="-----------------------MCA-----------------------">-----------------------MCA-----------------------</option>
					      <option value="Masters in Computer Applications">Masters in Computer Applications</option>
					     </select> 
					 	</td>
					 	</tr>
					 	<tr>
    					<td>
        					&nbsp;
        					<!--you just need a space in a row-->
    					</td>
						</tr>
						<tr>
					    <td>Mobile :</td>
					    <td><input type="phone" name="phone" required></td>
					   </tr>
					   <tr>
    					<td>
        					&nbsp;
        					<!--you just need a space in a row-->
    					</td>
						</tr>
						<tr>
					    <td>DOB :</td>
					    <td><input type="text" name="dob" required></td>
					   </tr>
					   <tr>
    					<td>
        					&nbsp;
        					<!--you just need a space in a row-->
    					</td>
						</tr>  
					   <tr>
					    <td><input type="submit" value="Submit"></td>
					   </tr>
					  </table>
					 </form>

 			</div>
		</div>
	</div>
 


</body>
</html>