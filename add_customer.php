<!DOCTYPE html>
<html>
<head>
    <title>RWK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>

<body>

<div class="container">
<h2 class="mt-5 mb-5 text-center">Add Customer Here</h2>
<form action="insert_customer.php" method="post">

  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
  </div><br>
  <div class="form-group">
    <label for="exampleInputPassword1">Contact</label>
    <input type="text" class="form-control" id="contact" name="contact"  placeholder="Enter Contact">
  </div><br>


    

    <!-- <label for="item_borrowed">:</label><br>
    <input type="text" id="item_borrowed" name="item_borrowed" required><br> -->

    <input type="submit" class="btn btn-primary w-100" value="Submit">
</form>
</div>
</body>
</html>
