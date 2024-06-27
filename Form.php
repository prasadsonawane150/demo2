<?php
// Database connection details
$servername = "localhost"; // Change this to your database server name
$username = "username"; // Change this to your database username
$password = "password"; // Change this to your database password
$dbname = "your_database_name"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $contact_number = $_POST['contact_number'];
    $product_details = $_POST['product_details'];
    $email = $_POST['email'];

    // Prepare SQL statement
    $sql = "INSERT INTO your_table_name (first_name, last_name, contact_number, product_details, email)
    VALUES ('$first_name', '$last_name', '$contact_number', '$product_details', '$email')";

    // Execute SQL statement
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>