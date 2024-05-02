<?php
//including the database connection file
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM signup ORDER BY id DESC"); // using mysqli_query instead
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>
<a href="Login.html">Add New Data</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>UserName</td>
		<td>Email</td>
		<td>Password</td>
		<td>Confirm Password</td>
	</tr>
	<?php  
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['username']."</td>";
		echo "<td>".$res['email']."</td>";
		echo "<td>".$res['password']."</td>";	
		echo "<td>".$res['c_password']."</td>";	
		
		"</tr>";
		
	}
	?>
	</table>
</body>
</html>
