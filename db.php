<?php
    // Establishing database connection
    $con = mysqli_connect("localhost", "RURANGWAsamson", "lms", "lms");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
    print("Connection successful");
}
?>