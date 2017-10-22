<?php
header('Content-type: application/json');
//Establishing Connection with server by passing server_name, user_id and pass as a patameter
$conn = mysqli_connect("localhost", "root", "") or die ("Not yet connected");
//=============================================================================================
//Selecting Database
$db = mysqli_select_db($conn, "eatadakicafe") or die ("cannot select database");
//=============================================================================================

$orderID = $_POST['order'];
$custid = $_POST['custid'];
$foodName = $_POST['foodName'];
$qty = $_POST['qty'];
$price = $_POST['price'];
$bitch = "INSERT INTO orderinfo(orderid,customerID,foodName,quantity,price) VALUES('$orderID','$custid','$foodName','$qty','$price')";

//if combobox is 'all'
mysqli_query($conn, $bitch);


echo json_encode('success');   
?>