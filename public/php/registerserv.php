<?php
$error=''; //Variable to Store error message;
if(isset($_POST['register'])){
if(empty($_POST['username']) || empty($_POST['password'])){
$error = "Username or Password is Invalid";
}
else
{
//Define $user and $pass
$fname=$_POST['first-name'];
$mname=$_POST['middle-name'];
$lname=$_POST['last-name'];
$username=$_POST['username'];
$password=$_POST['password'];
$hno=$_POST['h-no'];
$email=$_POST['email'];
$street=$_POST['street'];
$barangay=$_POST['barangay'];
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
mysqli_query($conn, "INSERT INTO customer(fname,mname,lname,houseno,street,barangay,email,contact) VALUES ('$username','$fname','$mname','$lname','$hno', '$street','$barangay','$email','$mobile')");
mysqli_query($conn, "INSERT INTO login(Username,Password) VALUES ('$username','$password')");
echo "register success!";
}
mysqli_close($conn); // Closing connection
}
}
?>