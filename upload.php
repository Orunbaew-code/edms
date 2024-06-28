<?php
// Connect to database (replace with your actual credentials)
$db_host = "localhost";
$db_name = "nuryyew";
$db_user = "admin";
$db_password = "admin";
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
session_start();

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Constants and error handling
define('UPLOAD_DIR', 'Documents/'); // Adjust path as needed
define('MAX_FILE_SIZE', 1024 * 1024 * 1024); // 5MB

// Handle file upload and database insertion
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $file_name = $_FILES["document"]["name"];
    $file_type = $_FILES["document"]["type"];
    $file_size = $_FILES["document"]["size"];
    $tmp_name = $_FILES["document"]["tmp_name"];
    $comment = $_POST["comment"];
    $added_date = date("Y-m-d");
    if (isset($_SESSION["username"])){
        $username = $_SESSION["username"];
    }
    $uploaded_author = $username; // Replace with user identification logic

    // Validate file type
    $allowed_types = array("application/pdf", "application/vnd.ms-word", "application/vnd.openxmlformats-officedocument.wordprocessingml.document", "text/plain");
    if (!in_array($file_type, $allowed_types)) {
        echo "Invalid file type. Only PDF, DOCX, TXT files are allowed.";
        exit;
    }

    // Validate file size
    if ($file_size > MAX_FILE_SIZE) {
        echo "File size exceeds maximum allowed limit of 5MB.";
        exit;
    }

    // Generate unique filename and copy file
    $unique_filename = uniqid() . "_" . $file_name;
    $destination = UPLOAD_DIR . $unique_filename;
    if (!move_uploaded_file($tmp_name, $destination)) {
        echo "Failed to upload file.";
        exit;
    }

    // Prepare and execute SQL query
    $sql = "INSERT INTO documents (name, unique_name, filetype, author, date, comment) VALUES ('$file_name', '$unique_filename', '$file_type', '$uploaded_author', '$added_date', '$comment')";
    if (!mysqli_query($conn, $sql)) {
        echo "Error: " . mysqli_error($conn);
        exit;
    }

    header("Location: main.php");
} else {
    echo "Only POST requests are allowed.";
}

mysqli_close($conn);
session_abort();
?>
