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
$orderid = $_POST['order'];
$query = "SELECT orderinfo.foodName,orderinfo.quantity, foodinfos.foodPrice AS unit_price, orderinfo.price as amount
FROM orderinfo
LEFT OUTER JOIN foodinfos ON foodinfos.foodName = orderinfo.foodName
WHERE orderinfo.OrderID = '$orderid' ORDER BY quantity ASC";
$x = 0;
$result = mysqli_query($conn,$query);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $send[$x]['foodName'] = $row["foodName"];
        $send[$x]['qty'] = $row["quantity"];
        $send[$x]['unitPrice'] = $row["unit_price"];
        $send[$x]['amount']=$row["amount"];
        $x += 1;
    }
    echo json_encode($send);
}
?>