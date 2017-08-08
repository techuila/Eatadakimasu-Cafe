<?php
$error=''; //Variable to Store error message;
if(isset($_POST['register'])){
if(empty($_POST['username']) || empty($_POST['password'])){
$error = "Username or Password is Invalid";
}
else
{
//Define $user and $pass
$cusname=$_POST['customer-name'];
$username=$_POST['username'];
$password=$_POST['password'];
$company=$_POST['company'];
$email=$_POST['email'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];

//Establishing Connection with server by passing server_name, user_id and pass as a patameter
$conn = mysqli_connect("localhost", "root", "");
//Selecting Database
$db = mysqli_select_db($conn, "eatadakicafe");
//sql query to fetch information of registerd user and finds user match.

$query3 = mysqli_query($conn, "SELECT * FROM login WHERE username='$username'");
$rows = mysqli_num_rows($query3);
if($rows == 1){
echo "username already existing!";
}
else
{
mysqli_query($conn, "INSERT INTO `customerinfo`(`Username`, `Name`, `Company`, `Email`, `Address`, `MobileNum`) VALUES ('$username','$cusname','$company','$email','$address','$mobile')");
mysqli_query($conn, "INSERT INTO `login`(`Username`, `Password`) VALUES ('$username','$password')");
echo "register success!";
}
mysqli_close($conn); // Closing connection
}
}
?>