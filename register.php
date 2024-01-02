<?php

    // Trying to check what will happen
header("Location: ./index.php?success=true");
exit();
    // Ending here....!

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"]; // Corrected the field name
    $phone = $_POST["phone"];
    $passwordi = $_POST["passwordi"];
    $gender = $_POST["gender"];

 

    // Database connection - Replace with your database credentials
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "register";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
// SQL to insert data into the database
$sql = "INSERT INTO users (firstname, lastname, emailaddress, phone, passwordi, gender) 
        VALUES ('$firstname', '$lastname', '$email', '$phone', '$passwordi', '$gender')";


    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
