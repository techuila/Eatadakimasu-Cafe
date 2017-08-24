<?php

$error = "";
// if(isset($_POST['submit'])){
// //Define $user and $pass
// // $fname=$_POST['fname'];
// // $mname=$_POST['mname'];
// // $lname=$_POST['lname'];
// // $hnum=$_POST['hnum'];
// // $street=$_POST['street'];
// // $barangay=$_POST['barangay'];
// // $email=$_POST['email'];
// // $contact=$_POST['contact'];
// // //Establishing Connection with server by passing server_name, user_id and pass as a patameter
// // $conn = mysqli_connect("localhost", "root", "");
// // //Selecting Database
// // $db = mysqli_select_db($conn, "eatadakicafe");
// // mysqli_query($conn, "INSERT INTO `guest`(`fname`, `mname`, `lname`, `houseno`, `street`, `barangay`, `email`, `contact`) VALUES ('$fname','$mname','$lname','$hnum','$street','$barangay','$email','$contact')");
// //echo $fname." ".$mname." ".$lname." ".$hnum." ".$street." ".$barangay." ".$email.$contact;
// session_start();
// }

if(isset($_POST['Order'])){
if(empty($_POST['itemName']) || empty($_POST['qty']) || empty($_POST['price'])){
$error = "fill up properly";
}
else
{
$itemName = $_POST['itemName'];
$qty = $_POST['qty'];
$price = $_POST['price'];
$count = 0;
//Establishing Connection with server by passing server_name, user_id and pass as a patameter
$conn = mysqli_connect("localhost", "root", "");
//Selecting Database
$db = mysqli_select_db($conn, "eatadakicafe");
//$db2 = mysqli_select_db($conn, "billinginfo");
//sql query to fetch information of registerd user and finds user match.
session_start();
$userid = $_SESSION['userid'];
$orderid = 0;
do{
$orderid +=1;
$sql = mysqli_query($conn, "SELECT orderID FROM orderinfo WHERE orderID = '$orderid'");
$rows = mysqli_num_rows($sql);
} while($rows >= 1);
$billingid = 0;
do{
$billingid +=1;
$sql = mysqli_query($conn, "SELECT `BillingID` FROM `billinginfo` WHERE `BillingID` = '$billingid'");
$rows = mysqli_num_rows($sql);
} while($rows >= 1);
$add = "NOTHING";
mysqli_query($conn, "INSERT INTO `orderinfo`(`orderID`, `CustID`, `foodName`, `qty`, `price`) VALUES ('$orderid','$userid','$itemName','$qty','$price')");
mysqli_query($conn, "INSERT INTO `billinginfo`(`BillingID`, `CustomerID`, `OrderNo`, `BillingAddress`) VALUES ('$billingid','$userid','$orderid','$add')");
mysqli_close($conn);
$error = $billingid." ".$orderid;
// //Establishing Connection with server by passing server_name, user_id and pass as a patameter
// $conn = mysqli_connect("localhost", "root", "");
// //Selecting Database
// $db = mysqli_select_db($conn, "billinginfo");
// mysqli_query($conn, "INSERT INTO `orderinfo`(`OrderID`, `CustID`, `FoodName`, `Qty`, `Price`) VALUES ('$count','$_SESSION['userid']','$itemName','$qty','$price'");
// }

}
}
?>