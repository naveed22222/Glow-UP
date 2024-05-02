<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$username = mysqli_real_escape_string($mysqli, $_POST['username']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$password = mysqli_real_escape_string($mysqli, $_POST['password']);
	$c_password = mysqli_real_escape_string($mysqli, $_POST['c_password']);
		
	
		$result = mysqli_query($mysqli, "INSERT INTO `signup`(`username`, `email`, `password`, `c_password`) VALUES ('$username','$email','$password','$c_password')");
		
		//display success message
			
		echo "<br/><a href='index.php' >View Result</a>";

		header("Location:Login.html");
		
	
}
?>
</body>
</html>
