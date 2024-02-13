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
    <title>Enter Borrower Details</title>
</head>
<body>

<h2>Enter Borrower Details</h2>
<form action="insert_item.php" method="post">
    <input type="text" name="customer_id" value="<?php echo $id; ?>"><br>
    <label for="name">item:</label><br>
    <input type="text" id="name" name="name" required><br>

    <label for="contact">price:</label><br>
    <input type="text" id="contact" name="contact" required><br>


    <input type="submit" value="Submit">
</form>

</body>
</html>
