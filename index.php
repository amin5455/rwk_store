<!DOCTYPE html>
<html>
<head>
    <title>Enter Borrower Details</title>
</head>
<body>

<h2>Enter Borrower Details</h2>
<form action="insert.php" method="post">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br>

    <label for="contact">Contact:</label><br>
    <input type="text" id="contact" name="contact" required><br>

    <label for="item_borrowed">Item Borrowed:</label><br>
    <input type="text" id="item_borrowed" name="item_borrowed" required><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>
