<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

// Establishing Connection with server by passing server_name, user_id and pass as a patameter
$conn = mysqli_connect("localhost", "root", "") or die ("Not yet Connected: " . mysql_error);
//Selecting Database
$db = mysqli_select_db($conn, "user-registration") or die ("cannot select Database: " . mysql_error);

$result = mysqli_query($conn,"SELECT * FROM users WHERE username='$username' AND password='$password'");
$result1 = mysqli_query($conn,"SELECT * FROM users ORDER BY id DESC");
if(mysqli_num_rows($result)){
	$res = mysqli_fetch_array($result);
	$res = mysqli_fetch_array($result1);
	$username = $res['username'];
	
	$_SESSION['username'] = $res['username'];
	echo "You are now Logged in. Click <a href='index.php'>here</a> to go back to main chat window.";
}

else{
	
	echo "No user found. Please go <a href='index.php'>back</a> and enter the correct login.<br>";
	echo "You may register a new account by clicking <a href='register.php'>here</a>.";
}

?>