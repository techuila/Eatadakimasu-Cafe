<?php
session_start();
$uname = $_SESSION['username'];
$msg = $_REQUEST['msg'];

// Establishing Connection with server by passing server_name, user_id and pass as a patameter
$conn = mysqli_connect("localhost", "root", "") or die ("Not yet Connected: " . mysql_error);
//Selecting Database
$db = mysqli_select_db($conn, "user-registration") or die ("cannot select Database: " . mysql_error);

mysqli_query($conn,"INSERT INTO logs (`username`, `msg`) VALUES ('$uname', '$msg')");

$result1 = mysqli_query($conn,"SELECT * FROM logs ORDER BY id DESC");

while($extract = mysqli_fetch_array($result1)) {
	echo "<span>" . $extract['username'] . "</span>: <span>" . $extract['msg'] . "</span><br />";
}