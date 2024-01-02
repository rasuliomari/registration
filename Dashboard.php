<?php
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
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Dashboard</title>
  <link rel="stylesheet" href="./dashboard.css"> <!-- You can create a separate CSS file for styling -->
</head>
<body>
  <header>
    <h1>User Dashboard</h1>
  </header>

  <main>
    <section class="user-list">
      <h2>User List</h2>
      <table>
        <thead>
          <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Gender</th>
          </tr>
        </thead>
        <tbody>
          <?php
          // Loop through the fetched data and display it in HTML table rows
          if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                  echo "<tr>";
                  echo "<td>" . $row["firstname"] . "</td>";
                  echo "<td>" . $row["lastname"] . "</td>";
                  echo "<td>" . $row["emailaddress"] . "</td>";
                  echo "<td>" . $row["phone"] . "</td>";
                  echo "<td>" . $row["gender"] . "</td>";
                  echo "</tr>";
              }
          } else {
              echo "<tr><td colspan='5'>No users found</td></tr>";
          }
          ?>
        </tbody>
      </table>
    </section>
  </main>
</body>
</html>
