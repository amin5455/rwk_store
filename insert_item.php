<?php
include 'db_connection.php';

// Get form data
$name = $_POST['name'];
$contact = $_POST['contact'];
$customer_id = $_POST['customer_id'];


// Insert data into the database
$sql = "INSERT INTO customer_detail (item, price,customer_id) VALUES ('$name', '$contact','$customer_id')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
