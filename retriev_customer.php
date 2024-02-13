<?php
include 'db_connection.php';

// Retrieve data from the database
$sql = "SELECT * FROM borrowers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Name: " . $row["name"]. " - Contact: " . $row["contact"]. " - Item Borrowed: " . $row["item_borrowed"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
