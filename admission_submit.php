<?php
// Include the database configuration file
include('config.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $class = $_POST['class'];

    // Prepare the SQL statement
    $sql = "INSERT INTO admissions (name, email, phone, class) VALUES ('$name', '$email', '$phone', '$class')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Admission form submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
} else {
    echo "Invalid request method.";
}
?>
