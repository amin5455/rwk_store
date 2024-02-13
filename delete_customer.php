<?php
include 'db_connection.php';

// Get form data
$id = $_POST['id'];

// Delete data from the database
$sql = "DELETE FROM borrowers WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
