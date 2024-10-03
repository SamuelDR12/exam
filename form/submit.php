<?php
$servername = "127.0.0.1"; 
$username = "root"; 
$password = ""; 
$dbname = "registration_db"; 
$port = '3307';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the form data
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$dob = $_POST['dob'];
$age = $_POST['age'];
$gender = $_POST['gender'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO users (full_name, email, mobile, dob, age, gender) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $fullName, $email, $mobile, $dob, $age, $gender);

// Execute the statement
if ($stmt->execute()) {
    echo "Registration successful!";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>