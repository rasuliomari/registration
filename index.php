<?

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

// SQL to retrieve data from the database
//$sql = "SELECT * FROM users";
//$result = $conn->query($sql);

// Close the database connection
$conn->close();
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Add this in the head section of your HTML -->
<!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> -->
<script>
  // Function to update the user data using AJAX
  function updateUserTable() {
      $.ajax({
          url: "updateUserData.php",
          type: "GET",
          success: function (data) {
              $("#userTable tbody").html(data);
          }
      });
  }

  // Update user data every 5 seconds (adjust the interval as needed)
  setInterval(updateUserTable, 5000);
</script>


  <title>ITDeskLtd Registration</title>
  <link rel="stylesheet" href="./register.css">
  <script>
    function validatePassword() {
      var password = document.getElementById("passwordi").value;
      var confirm_password = document.getElementById("confirm_password").value;

      if (password !== confirm_password) {
        alert("Passwords do not match. Please try again.");
        return false;
      }

      return true;
    }
  </script>
</head>
<body>
  <div class="container">
    <h2>Register</h2>
    <img src="./logo/itdesk logo.png" alt="ITDeskLtd Logo" class="logo">
    <form action="./register.php" method="post" onsubmit="return validatePassword()">
      <div class="input-group">
        <label for="firstname">First Name</label>
        <input type="text" id="firstname" name="firstname" required>
      </div>
      <div class="input-group">
        <label for="lastname">Last Name</label>
        <input type="text" id="lastname" name="lastname" required>
      </div>
      <div class="input-group">
        <label for="email">Email address</label>
        <input type="email" id="emailaddress" name="email" required>
      </div>
      <div class="input-group">
        <label for="phone">Phone Number</label>
        <input type="tel" id="phone" name="phone" required>
      </div>
      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="passwordi" name="passwordi" required>
      </div>
      <div class="input-group">
        <label for="confirm_password">Confirm Password</label>
        <input type="password" id="confirm_password" name="confirm_password" required>
      </div>
      <div class="input-group">
        <label for="gender">Gender</label>
        <select id="gender" name="gender" required>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select>
      </div>
      <div class="input-group">
       <a href="./Home.html" button type="submit" class="btn" style ="text-decoration:none"; >Register</button></a>
      </div>
    </form>
  </div>
</html>
