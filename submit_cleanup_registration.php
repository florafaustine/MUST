<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "GreenGuardiansDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comments = $_POST['comments'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO registrations (name, email, phone, comments) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $email, $phone, $comments);

// Execute the statement
if ($stmt->execute()) {
    echo "Registration successful!";
} else {
    echo "Error: " . $stmt->error;
}

// Close connections
$stmt->close();
$conn->close();
?>
