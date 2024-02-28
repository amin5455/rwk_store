<?php
include 'db_connection.php';

// Get form data
 $customer_id = $_POST['customer_id'];
 

 $item = "Wasool Price";
 

 $wasool_price = $_POST['wasool_price'];
 

 $total_price = $_POST['total_price'];
 
 $bakaya_price = $total_price-$wasool_price;
 date_default_timezone_set('Asia/Karachi');
 $datetime = date('d-m-y h:i:s a');


// $contact = $_POST['contact'];
// $customer_id = $_POST['customer_id'];


// Insert data into the database
$price_detail = "INSERT INTO `price_detail`(`total_price`, `wasool_price`, `bakaya_price`,`customer_id`,`date_time`) VALUES ($total_price,$wasool_price,$bakaya_price,$customer_id,'$datetime')";

 
$del = "DELETE FROM `customer_detail` WHERE customer_id=$customer_id";
$sql = "INSERT INTO customer_detail (item, price,customer_id) VALUES ('$item', $bakaya_price,$customer_id)";
$conn->query($price_detail);
$conn->query($del);
$conn->query($sql);
// if ($conn->query($sql) === TRUE) {
    echo "successfully wasool";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();
?>
