<?php
//Establishing Connection with server by passing server_name, user_id and pass as a patameter
$conn = mysqli_connect("localhost", "root", "") or die ("Not yet connected");
//=============================================================================================
//Selecting Database
$db = mysqli_select_db($conn, "eatadakicafe") or die ("cannot select database");
//=============================================================================================

//notice me====================================
$id = "post id of order here";
//=============================================
$query = mysqli_query($conn, "SELECT * FROM orderinfo WHERE orderid='$id'");

$orderid[] = "";
$customerid[] = "";
$foodname[] = "";
$quantity[] = "";
$price[] = "";


$result = mysqli_query($conn,$query);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $orderid[$x] = $row["orderid"];
        $customerid[$x] = $row["CustomerID"];
        $foodname[$x] = $row["foodName"];
        $quantity[$x]=$row["quantity"];
        $price[$x]=$row["price"];
        $x += 1;
    }
}
?>