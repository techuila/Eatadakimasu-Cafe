<?php
header('Content-type: application/json');

// Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost", "root", "") or die ("Not yet connected");
 //=============================================================================================
 //Selecting Database
 $db = mysqli_select_db($conn, "eatadakicafe") or die ("cannot select database");
 //=============================================================================================

//IF LOGIN LE insert if condition here
session_start();
$custid = $_SESSION["custid"];
$sql = "SELECT * FROM `customerinfo` WHERE customerID = '$custid'";
$result = mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
                $send['barangay'] = $row['Barangay'];
                $send['street'] = $row['Street'];
                $send['house'] = $row['House_No'];
                $send['email'] = $row['Email'];
                $send['mobile'] = $row['Mobile_No'];
                $send['fname'] = $row['Firstname'];
                $send['lname'] = $row['Lastname'];
        } 
        echo json_encode($send);
}
?>