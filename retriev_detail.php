<?php
include 'db_connection.php';
if (isset($_GET['id']) && $_GET['id'] !==0){
    $id=$_GET['id'];
    $name=$_GET['name'];
  }
  $sql1 = "SELECT SUM(price) AS total_price FROM customer_detail where customer_id=$id";
  $resultsum = $conn->query($sql1);
  if ($resultsum && $resultsum->num_rows > 0) {
    $row = $resultsum->fetch_assoc();
    $totalPrice = $row["total_price"];
   
} else {
    $totalPrice=0;
}

  
?>
<!DOCTYPE html>
<html>
<head>
    <title>Enter Borrower Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>

<body>

<a href="add_item.php?name=<?php echo $name; ?>&id=<?php echo $id;?>">add</a>
<h2><?php echo $name; ?>&nbsp;&nbsp;&nbsp;<?php echo $totalPrice; ?></h2><br><br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Item</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
  if (isset($_GET['id']) && $_GET['id'] !==0){
    $id=$_GET['id'];
  }
// Retrieve data from the database
$sql = "SELECT * FROM customer_detail where customer_id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        ?>
    <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
      <td><?php echo $row['item']; ?></td>
      <td><?php echo $row['price']; ?></td>
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
