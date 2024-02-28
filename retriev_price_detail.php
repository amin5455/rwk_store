<?php
include 'db_connection.php';
if (isset($_GET['id']) && $_GET['id'] !==0){
    $id=$_GET['id'];
    $name=$_GET['name'];
  }

  
?>
<!DOCTYPE html>
<html>
<head>
    <title>RWK General store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>

<body>

<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Total Price</th>
      <th scope="col">Wasool Price</th>
      <th scope="col">Bakaya Price</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  <?php
  if (isset($_GET['id']) && $_GET['id'] !==0){
    $id=$_GET['id'];
  }
// Retrieve data from the database
$sql = "SELECT * FROM price_detail where customer_id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        ?>
    <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
      <td><?php echo $row['total_price']; ?></td>
      <td><?php echo $row['wasool_price']; ?></td>
      <td><?php echo $row['bakaya_price']; ?></td>
      <td><?php echo $row['date_time']; ?></td>


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
