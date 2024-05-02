<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['submit'])) {	
	$f_name = mysqli_real_escape_string($mysqli, $_POST['f_name']);
	$l_name = mysqli_real_escape_string($mysqli, $_POST['l_name']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$phone_no = mysqli_real_escape_string($mysqli, $_POST['phone_no']);
	$address = mysqli_real_escape_string($mysqli, $_POST['address']);
	$address_2 = mysqli_real_escape_string($mysqli, $_POST['address_2']);
	$city = mysqli_real_escape_string($mysqli, $_POST['city']);
	$zip = mysqli_real_escape_string($mysqli, $_POST['zip']);
	$method = mysqli_real_escape_string($mysqli, $_POST['method']);


	
	
        $result = mysqli_query($mysqli, "INSERT INTO `cart`( `f_name`, `l_name`, `email`, `phone_no`, `address`, `address_2`, `city`, `zip`, `method`) 
        VALUES ('$f_name','$l_name','$email','$phone_no','$address','$address_2','$city','$zip','$method')");
		
		//display success message
			
        echo "<font color='green'>Data added successfully.";
	
    
		
	
}
?>
</body>
</html>
