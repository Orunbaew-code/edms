<?php
// Database connection details
session_start();
$servername = "localhost"; // Replace with your actual database server address
$username = "admin"; // Replace with your database username
$password = "admin"; // Replace with your database password
$dbname = "nuryyew"; // Replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  // Get username and password from the form
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Validate username and password (replace with your own logic)
  if (empty($username) || empty($password)) {
    $error_message = "Please fill in both username and password.";
  } else {
    // Hash password for secure comparison (use a strong hashing algorithm)

    // Query the database for the user
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // Successful login
      // Implement your desired action (e.g., redirect to another page, display welcome message)
      $row = $result->fetch_assoc();
      $user_id = $row['id'];
      $user_role = $row['privilege'];
      $_SESSION["user_id"] = $user_id;  
      $_SESSION["user_role"] = $user_role;
      $_SESSION["username"] = $username;
      header("Location: main.php"); 
    } else {
      $error_message = "Invalid username or password.";
      header("Location: index.php");
    }
  }
}

// Close connection
$conn->close();

?>
