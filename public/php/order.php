<?php
$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
//Define $user and $pass
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$hnum=$_POST['hnum'];
$street=$_POST['street'];
$barangay=$_POST['barangay'];
$email=$_POST['email'];
$contact=$_POST['contact'];
//Establishing Connection with server by passing server_name, user_id and pass as a patameter
$conn = mysqli_connect("localhost", "root", "");
//Selecting Database
$db = mysqli_select_db($conn, "eatadakicafe");
mysqli_query($conn, "INSERT INTO `guest`(`fname`, `mname`, `lname`, `houseno`, `street`, `barangay`, `email`, `contact`) VALUES ('$fname','$mname','$lname','$hnum','$street','$barangay','$email','$contact')");
//echo $fname." ".$mname." ".$lname." ".$hnum." ".$street." ".$barangay." ".$email.$contact;
}
?>