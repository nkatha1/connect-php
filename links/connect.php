<?php// Replace these values with your actual database credentials
$host = 'localhost';
$username = 'root';
$password = ' ';
$database = 'reg form';

// Connect to the database
$conn = new mysqli(localhost, root,  , regform);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare the SQL statement
$stmt = $conn->prepare("INSERT INTO Reg (first_name, last_name, email) VALUES (?, ?, ?)");

// Bind the parameters
$stmt->bind_param("sss", $first_name, $last_name, $email);

// Set the parameter values
$first_name = "John";
$last_name = "Doe";
$email = "johndoe@example.com";

// Execute the statement
$stmt->execute();

// Close the statement and connection
$stmt->close();
$conn->close();?>