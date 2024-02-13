<?php
include 'db_connection.php';

// Get form data
$name = $_POST['name'];
$contact = $_POST['contact'];
$item_borrowed = $_POST['item_borrowed'];

// Insert data into the database
$sql = "INSERT INTO customer (name, contact, item) VALUES ('$name', '$contact', '$item_borrowed')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
