<?php
include 'db_connection.php';

// Get form data
$id = $_POST['id'];
$name = $_POST['name'];
$contact = $_POST['contact'];
$item_borrowed = $_POST['item_borrowed'];

// Update data in the database
$sql = "UPDATE customer SET name='$name', contact='$contact', item_borrowed='$item_borrowed' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
