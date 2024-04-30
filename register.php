<?php
// Connection details
$host = "localhost";
$user = "RURANGWAsamson";
$pass = "lms";
$database = "lms";

// Creating connection
$connection = new mysqli($host, $user, $pass, $database);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Handling POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieving form data
    $fname  = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];  
    $password = $_POST['password'];
    $telephone = $_POST['telephone'];
    
    
    // Preparing SQL query
    $sql = "INSERT INTO user (firstname, lastname,	email, password, telephone) 
    VALUES ('$fname','$lname','$email','$password','$telephone')";

    // Executing SQL query
    if ($connection->query($sql) === TRUE) {
        // Redirecting to login page on successful registration
        header("Location: login.html");
        exit();
    } else {
        // Displaying error message if query execution fails
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
}

// Closing database connection
$connection->close();
?>
