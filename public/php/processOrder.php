<?php
header('Content-type: application/json');
//Establishing Connection with server by passing server_name, user_id and pass as a patameter
$conn = mysqli_connect("localhost", "root", "") or die ("Not yet connected");
//=============================================================================================
//Selecting Database
$db = mysqli_select_db($conn, "eatadakicafe") or die ("cannot select database");
//=============================================================================================

$billingID = $_POST['billing'];
$orderID = $_POST['order'];
$status = $_POST['status'];
$bitch = "UPDATE billinginfo SET Status = '$status' WHERE BillingID = '$billingID' AND OrderID = '$orderID'";

//if combobox is 'all'
if($status == 1){
    mysqli_query($conn, $bitch);
}
// //elseif combobox is 'pending'
elseif($status == 2){
    mysqli_query($conn, $bitch);
}
elseif($status == 3){
    mysqli_query($conn, "DELETE FROM billinginfo WHERE BillingID = '$billingID' AND OrderID = '$orderID'");
    mysqli_query($conn, "DELETE FROM orderinfo WHERE orderid = '$orderID'");
}

echo json_encode('success');   



?>