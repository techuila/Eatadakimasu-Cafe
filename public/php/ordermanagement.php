<?php
header('Content-type: application/json');
//Establishing Connection with server by passing server_name, user_id and pass as a patameter
$conn = mysqli_connect("localhost", "root", "") or die ("Not yet connected");
//=============================================================================================
//Selecting Database
$db = mysqli_select_db($conn, "eatadakicafe") or die ("cannot select database");
//=============================================================================================

$bitch = "SELECT billinginfo.CustomerID,(IFNULL(customerinfo.Mobile_No, guestinfo.Mobile_No)) AS contact, BillingID,OrderID,(IFNULL( CONCAT(customerinfo.Lastname, CONCAT(', ', customerinfo.Firstname)), CONCAT(guestinfo.Lastname, CONCAT(', ', guestinfo.Firstname)))) AS customer,
(CONCAT(billinginfo.Barangay, 
	(CASE
     	WHEN billinginfo.Street > '' THEN 
     		CASE
     			WHEN billinginfo.House_No > '' 
     				THEN CONCAT(CONCAT(CONCAT(', ', billinginfo.Street),', '), billinginfo.House_No)
     			ELSE CONCAT(', ', billinginfo.Street)
     		END
     	ELSE ''
     		
    END)
)) as address, 
(SELECT SUM(orderinfo.price) FROM orderinfo WHERE orderinfo.orderid = billinginfo.OrderID) AS total_price, 
(CASE
 	WHEN STRCMP(SUBSTR(billinginfo.CustomerID,1,1),'G') THEN 'Customer'
 	ELSE 'Guest'
 END) AS type,
(CASE
 	WHEN STRCMP(Status,0) = 0 THEN 'PENDING'
 	WHEN STRCMP(Status,1) = 0 THEN 'CONFIRMED'
 	WHEN STRCMP(Status,2) = 0 THEN 'DELIVERED'
END) as stats FROM billinginfo 
LEFT OUTER JOIN customerinfo ON billinginfo.CustomerID = customerinfo.customerID 
LEFT OUTER JOIN guestinfo ON billinginfo.CustomerID = guestinfo.guestID ";


//if combobox is 'all'
if($_POST['data'] == 3){
    $result = mysqli_query($conn, $bitch . "ORDER BY Status DESC");
}
// //elseif combobox is 'pending'
elseif($_POST['data'] == 0){
    $result = mysqli_query($conn, $bitch . "WHERE Status=0 ORDER BY Status DESC");    
}
// //elseif combobox is 'orders'
elseif($_POST['data'] == 1){
    $result = mysqli_query($conn, $bitch . "WHERE Status=1 ORDER BY Status DESC");
}
// //elseif combobox is 'delivered'
elseif($_POST['data'] == 2){
    $result = mysqli_query($conn, $bitch . "WHERE Status=2 ORDER BY Status DESC");
}

//========================================================================

$x = 0;

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $send[$x]["billing"] = $row["BillingID"];
        $send[$x]["contact"] = $row["contact"];        
        $send[$x]["order"] = $row["OrderID"];
        $send[$x]["customer"] = $row["customer"];
        $send[$x]["address"] = $row["address"];
        $send[$x]["price"] = $row["total_price"];
        $send[$x]["type"] = $row["type"];
        $send[$x]["stats"] = $row["stats"];
        $send[$x]["custid"] = $row["CustomerID"];
        $send[0]["error"] = false;    
        $x += 1;
    }
    echo json_encode($send);
}
else{
    $send[0]["error"] = true;
    echo json_encode($send);
}

?>