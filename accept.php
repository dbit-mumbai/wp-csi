
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


<link href = "csi-logo.png" rel="icon" type="image/png">

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



<table>



</td>





	<font size="5">  DISPLAY FORM </font>
</center>


	<tr>
	<th>Student ID</th>
	<th>First Name</th>
	<th>Gender</th>
	<th>Contact</th>	
	<th>Email</th>
	<th>Department</th>
	<th>Year</th>
	<th>Status</th>
	
	
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td><button type="accept"  value="accept">Accept</td>
	</table>

