<?php
	$firstname = $_POST["firstname"];
	$lastname = $_POST['lastname'];
    $emailaddress = $_POST['emailaddress'];
	$phone = $_POST['phone'];
	$passwordi = $_POST['passwordi'];
	$gender = $_POST['gender'];

	// Database connection
	$conn = new mysqli('localhost','root','','register');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into users(firstname, lastname, emailaddress, phone, passwordi, gender) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssiss", $firstname, $lastname, $emailaddress,  $phone, $passwordi, $gender);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>