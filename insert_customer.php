<?php
include 'db_connection.php';

// Get form data
$name = $_POST['name'];
$contact = $_POST['contact'];
// $item_borrowed = $_POST['item_borrowed'];

// Insert data into the database
$sql = "INSERT INTO customer (name, contact) VALUES ('$name', '$contact')";

if ($conn->query($sql) === TRUE) {
    ?>
    <script>
        window.location.href="index.php";
    </script>
    <?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
