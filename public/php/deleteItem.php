<?php
$connect = mysqli_connect("localhost", "root", "", "eatadakicafe");

    $orderid = $_POST['order'];
    $foodname = $_POST['foodname'];

    $query = "DELETE from orderinfo WHERE foodName = '$foodname' AND orderid = '$orderid' `";  
    mysqli_query($connect, $query);
    echo json_encode("Fucking done");
?>