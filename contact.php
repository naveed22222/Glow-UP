<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$od = mysqli_real_escape_string($mysqli, $_POST['order_number']);
	$comments = mysqli_real_escape_string($mysqli, $_POST['comments']);
		
	
        $result = mysqli_query($mysqli, "INSERT INTO contact_info(name, email, order_number, comments) VALUES ('$name','$email','$od','$comments')");
		
		//display success message
			
        echo "<font color='green'>Data added successfully.";
	
    
		
	
}
?>
</body>
</html>
