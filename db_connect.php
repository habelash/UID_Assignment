<!-- Sql file Source -->
<!-- https://www.dropbox.com/s/irofrjn8eak85ku/indian_state_district_city.sql?dl=0 -->

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "uid_assignment";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?> 