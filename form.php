<?php

require("register.php");

if(isset($_POST['s1']))
{
	
$fn=$_POST["fname"];
$mn=$_POST["mname"];
$ln=$_POST["lname"];
$dob=$_POST["dob"];
$gen=$_POST["gen"];
$contact=$_POST["num"];
$em=$_POST["em"];
$city=$_POST["ct"];
$dept=$_POST["dept"];
$yr=$_POST["yr"];
$id=$_POST["id"];
$skl=$_POST["sls"];


$write=mysqli_query($connect,"INSERT INTO csiform(fname,mname,lname,dob,gen,num,em,ct,dept,yr,id,sls) values('$fn','$mn','$ln','$dob','$gen','$contact','$em','$city','$dept','$yr','$id','$skl')")or die("error cannot write data into database");
	
	echo "Inserted successfully";
	
}
?>

<!DOCTYPE html>

<html>

<head>
	<link href = "csi-logo.png" rel="icon" type="image/png">
	<title>CSI Membership form</title>

	<style>
		fieldset {
    		display: block;
    		width: 50%;
	
   		margin-left: 25%;
    		margin-right: 25%;
    		border-width: 2px;
    		border-color: black;
    		}
	</style>
	
	<style>
	table {
	border-collapse: collapse;
	width:100%;
	}
	
	th,td{
	padding:2px;
	}
	</style>
	



	
	<script src="myFunction.js"></script>
	
</head>

<body>

<center style="background-color:lightblue"><table>

<tr>

<td><img src="dbit.png" alt="DBIT LOGO" style="width: 75px;height: 75px;"></td>

<td><font size="6"><center>DON BOSCO INSTITUTE OF TECHNOLOGY</center></font>

	<center><font size="4">Computer Society India</font></center></td>

<td><img src="csi-logo.png" alt="CSI LOGO" style="width: 75px;height: 75px;"></td>

</tr>

</table>

</center>

<hr>

<center><h2>CSI Membership form</h2></center>





<form  name="myForm" action="form.php" method="POST" onsubmit="return myFunction()">

	<fieldset>

		<legend><strong>Personal Information</strong></legend>

		<table border=0>

		<tr>

		<th>Name</td><td>:</td><td><input type="text" name="fname" placeholder="First Name"></td>

		</tr>

		<tr>

		<th>Middle name</th><td>:</td><td><input type="text" name="mname" placeholder="Middle Name"></td>

		</tr>

		<tr>

		<th>Last Name</th><td>:</td><td><input type="text" name="lname" placeholder="Last Name"></td>

		</tr>

		<tr>


		<th>Date Of Birth</th><td>:</td><td><input type="Date" name="dob"></td>

		</tr>
		
		<tr>

		<th>Profile Photo</th><td>:</td><td><input type="file" name="pic"></td>

		</tr>


		<tr>

		<th>Gender
		</th>
		<td>:</td><td>
		<input type="radio" name="gen" value="male" >Male
		<input type="radio" name="gen" value="female" >Female

		
		</td>

		</tr>

		<tr>		

		<th>Contact</th><td>:</td><td><input type="tel" name="num" id="phone" placeholder="eg.123" maxlength="10"></td>

		</tr>

		<tr>


		<th>Email</th><td>:</td><td><input type="email" name="em"></td>

		</tr>

		<tr>

		<th>City</th><td>:</td><td><input type="text" name="ct"></td>

		</tr>

		</table>

	</fieldset>

	<br>

	<fieldset>

		<legend><strong>Academic details</strong></legend>

		<table>

		<tr>

		<th>Department</th><td>:</td><td><select name="dept">
			<option value="se" selected disabled>-----Select Department-----</option>
			
			<option value="IT">Information Technology</option>

			<option value="COMPS">Computer</option>

			<option value="EXTC">Electronics and telecommunications</option>

			<option value="MECH">Mechanical </option>

		</select></td>

		</tr>

		<tr>

		<th>Year</th><td>:</td><td><select name="yr">
			<option value="aa" selected disabled>----Select Year----</option>
			
			<option value="FE">First</option>

			<option value="SE">Second</option>

			<option value="TE">Third</option>

			<option value="BE">Fourth</option>

		</select></td>

		</tr>

		<tr>

		<th>Student ID</th><td>:</td><td><input type="text" name="id"></td>

		</tr>

		</table>

	</fieldset>

	<br>

	<fieldset>

		<legend><strong>Technical Skills</strong></legend>
		
		<table>
		
		<td><input type="checkbox" name="sls" value="C">C</td>
		
		<td><input type="checkbox" name="sls" value="C++">C++</td>
		
		<td><input type="checkbox" name="sls" value="java">Java</td>
		
		<td><input type="checkbox" name="sls" value="html">HTML</td>
		
		<td><input type="checkbox" name="sls" value="mysql">MySQL</td>
		
		<td><input type="checkbox" name="sls" value="php">PHP</td>
		
		<td><input type="checkbox" name="sls" value="css">CSS</td>
		
		<td><input type="checkbox" name="sls" value="javascript">JavaScript</td>
		

		
		
</table>
		

	</fieldset>

	<br>

	<fieldset>

		<legend><strong>Membership period</strong></legend>

		<br>DBIT-CSI membership: 
		<input type="radio" name="dmem" value="1" onclick="manageFee()">1 year
		<input type="radio" name="dmem" value="2" onclick="manageFee()">2 year
		<input type="radio" name="dmem" value="3" onclick="manageFee()">3 year
		<input type="radio" name="dmem" value="no" onclick="manageFee()">No
		<br>

		<br>CSI-India membership: 
		<input type="radio" name="imem" value="1" onclick="manageFee()">1 year
		<input type="radio" name="imem" value="2" onclick="manageFee()">2 years
		<input type="radio" name="imem" value="3" onclick="manageFee()">3 years
		<input type="radio" name="imem" value="life"onclick="manageFee()">Lifetime
		<input type="radio" name="imem" value="no" onclick="manageFee()">No<br>

		<br>Amount to be paid:Rs<input type="text" name="amt" value="" disabled><br>

		

	</fieldset>
	<br>

<center><button type="submit"  value="Submit" name="s1">Submit</button></center>

</form>

<pre>
<strong>
<center>
<h3> 
For query:
Email:csi.dbit@gmail.com
Mobile number:7854965478
</center>
</strong>
</pre>


	
	
</body>

</html>
