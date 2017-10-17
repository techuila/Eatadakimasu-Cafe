<?php

// Establishing Connection with server by passing server_name, user_id and pass as a patameter
$conn = mysqli_connect("localhost", "root", "") or die ("Not yet Connected: " . mysql_error);
//Selecting Database
$db = mysqli_select_db($conn, "user-registration") or die ("cannot select Database: " . mysql_error);

$result1 = mysqli_query($conn,"SELECT * FROM logs ORDER BY id DESC");
// $result2 = mysqli_query($conn, "SELECT username FROM users WHERE status = 1 ");
// while($extract = mysqli_fetch_array($result2)) {
// 	echo "<span>" . $extract['username'] . "</span>: <span>" . $extract['msg'] . "</span><br />";
// }
while($extract = mysqli_fetch_array($result1)) {
	echo "<span>" . $extract['username'] . "</span>: <span>" . $extract['msg'] . "</span><br />";
}
?>