
<?php

require("register.php");
$sql = "select * from csiform;
$result = $_connect->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
	
    while($row = $result->fetch_assoc()) {
        echo "id: ".$i." First name=". $row["fname"]. " Middle Name: " . $row["mname"]. " Last Name " . $row["lname"]. "<br>";
		$i++;
    }
} else {
    echo "0 results";
}
$con->close();

?>




<!DOCTYPE html>
<html>
<head>	
<link href = "csi-logo.png" rel="icon" type="image/png">	
<style>	
	table 
	{	
	border-collapse: collapse;	
	width:100%;		
	}
		
	th,td{	
	padding:2px;	
	}	
</style>
</head>

<body>
<center style="background-color:lightblue">
<table>
<tr>
<td><img src="dbit.png" alt="DBIT LOGO" style="width: 75px;height: 75px;"></td>
<td><font size="6"><center>DON BOSCO INSTITUTE OF TECHNOLOGY</center></font>	<center><font size="4">Computer Society India</font></center>
</td><td><img src="csi-logo.png" alt="CSI LOGO" style="width: 75px;height: 75px;"></td>
</tr>
</table>
</center>
<hr>
<center>
	<font size="5">  DISPLAY FORM </font>
</center>
<br>
	<table border=3  align="center">
	<tr>	
	<th>Student ID</th>	
	<th>First Name</th>	
	<th>Gender</th>
	<th>Contact</th>	
	<th>Email</th>
	<th>Department</th>	
	<th>Year</th>	
	<th>Status</th>
	</tr>
	<tr>	
	<td></td>
	<td></td>	
	<td></td>	
	<td></td>	
	<td></td>	
	<td></td>	
	<td></td>	
	<td><button type="accept"  value="accept">Accept</td></tr>
	</table>
</body>
</html>