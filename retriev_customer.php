<?php
include 'db_connection.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Enter Borrower Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>

<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Customer</th>
      <th scope="col">Contact</th>
      <th scope="col">Total Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
// Retrieve data from the database
$sql = "SELECT * FROM customer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        ?>
    <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['contact']; ?></td>
      <td><?php echo $row['item']; ?></td>
      <td><a href="detail.php" class="btn btn-primary btn-sm">Detail</a></td>
    </tr>
    


    <?php
} }

else {
    echo "0 results";
}

$conn->close();

?>
</body>
</html>
