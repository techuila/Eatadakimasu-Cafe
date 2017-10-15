<?php

//Establishing Connection with server by passing server_name, user_id and pass as a patameter
$conn = mysqli_connect("localhost", "root", "") or die ("Not yet connected");
//=============================================================================================
//Selecting Database
$db = mysqli_select_db($conn, "eatadakicafe") or die ("cannot select database");
//=============================================================================================

$query = mysqli_query($conn, "SELECT * FROM billinginfo WHERE status=0");
$query1 = mysqli_query($conn, "SELECT * FROM billinginfo WHERE status=1");
$query2 = mysqli_query($conn, "SELECT * FROM billinginfo WHERE status=2");
$billingid[] = "";
$customerid[] = "";
$orderid[] = "";
$barangay[] = "";
$street[] = "";
$houseno[] = "";
$status[] = "";
$x = 0;
//for pending use query, for confirmed use query2, for delivered use query3
$result = mysqli_query($conn,$query);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $billingid[$x] = $row["BillingID"];
        $customerid[$x] = $row["CustomerID"];
        $orderid[$x] = $row["OrderID"];
        $barangay[$x]=$row["Barangay"];
        $street[$x]=$row["Street"];
        $houseno[$x]=$row["House_No"];
        $status[$x]=$row["Status"];
        $x += 1;
    }
}






?>