<?php
// Connect to database (replace with your actual credentials)
$db_host = "localhost";
$db_name = "nuryyew";
$db_user = "admin";
$db_password = "admin";
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
session_start();


$assignment_name = $_POST["assignment_name"];
$assignment_text = $_POST["assignment_text"];
$assignment_to = $_POST["assignment_to"];
$added_date = date("Y-m-d");
$assignment_status = 0;

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO assignments (name, text, date, status) VALUES ('$assignment_name', '$assignment_text', '$added_date', '$assignment_status')";
    if (!mysqli_query($conn, $sql)) {
        echo "Error: " . mysqli_error($conn);
        exit;
    }

    header("Location: main.php");
?>