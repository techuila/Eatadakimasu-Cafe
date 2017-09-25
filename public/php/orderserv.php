<?php
header('Content-type: application/json');

//Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost", "root", "") or die ("Not yet connected");
 //=============================================================================================
 //Selecting Database
 $db = mysqli_select_db($conn, "eatadakicafe") or die ("cannot select database");
 //=============================================================================================

// //get unique orderid
$orderid = 0;
do{
$orderid +=1;
$query = mysqli_query($conn, "SELECT * FROM orderinfo WHERE orderid='$orderid'");
$rows = mysqli_num_rows($query);
}while($rows > 0);
//=============================================================================================
$guestid = 0;
do{
$guestid +=1;
$query2 = mysqli_query($conn, "SELECT * FROM guestinfo WHERE guestid='$guestid'");
$rows = mysqli_num_rows($query2);
}while($rows > 0);


$foodname = $_POST['item'];
$foodqty = $_POST['qty'];
$foodprice = $_POST['price'];
// $foodname = array("asd","qwe","zxc");
// $foodqty = array("21","13","15");
// $foodprice = array("2333","155","1567");
$fname=$_POST['first-name'];
$lname=$_POST['last-name'];
$birthday=$_POST['year'] . "-" . $_POST['month'] . "-" . $_POST['day'] ;
$gender=$_POST['gender']; 
$barangay=$_POST['barangay'];
$street=$_POST['street'];
$hno=$_POST['h-no'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$paymentmethod=$_POST['p-method'];
$cardtype=$_POST['card'];
$credcardnum=$_POST['c-num'];
$securitycode=$_POST['s-code'];
$expirationdate=$_POST['exp-start'] . "-" . $_POST['exp-end'];
mysqli_query($conn, "INSERT INTO guestinfo(guestID,Firstname,Lastname,Birthday,Gender,Barangay,Street,House_No,Email,Mobile_No) VALUES('$guestid','$fname','$lname','$birthday','$gender','$barangay','$street','$hno','$email','$mobile')");
mysqli_query($conn, "INSERT INTO `paymentmethod`(`billingid`, `p_method`, `c_type`, `c_num`, `s_num`, `exp_date`) VALUES ('$orderid','$paymentmethod','$cardtype','$credcardnum','$securitycode','$expirationdate')");

$counter = 0;
do{
mysqli_query($conn, "INSERT INTO `orderinfo`(`orderid`, `customerID`, `foodName`, `quantity`, `price`) VALUES ('$orderid','$guestid','$foodname[$counter]','$foodqty[$counter]','$foodprice[$counter]')");
$counter +=1;

}while($counter < count($foodname));
//session_start();
$customer = "test";
mysqli_query($conn, "INSERT INTO `billinginfo`(`CustomerID`, `OrderID`, `Barangay`, `Street`, `House_No`) VALUES ('$guestid','$orderid','$barangay','$street','$house')");

?>