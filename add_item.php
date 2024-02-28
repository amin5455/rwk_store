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
    <title>RWK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>

<body>

<div class="container">


<h2 class="mt-5 mb-5 text-center"><?php echo $name; ?></h2>
<form action="insert_item.php" method="post">
    <input type="hidden" name="customer_id" value="<?php echo $id; ?>"><br>
    <label for="exampleInputEmail1">Item</label>
    <input type="text" class="form-control" id="name" name="name" required><br>

    <label for="contact">Price</label><br>
    <input type="text" class="form-control" id="contact" name="contact" required><br>


    <input type="submit" class="btn btn-primary w-100" value="Submit">
</form>
</div>
</body>
</html>
