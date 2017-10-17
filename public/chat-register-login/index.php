<?php


// Establishing Connection with server by passing server_name, user_id and pass as a patameter
$conn = mysqli_connect("localhost", "root", "") or die ("Not yet Connected: " . mysql_error);
//Selecting Database
$db = mysqli_select_db($conn, "user-registration") or die ("cannot select Database: " . mysql_error);

session_start();

if(!isset($_SESSION['username'])) {


// $result1 = mysqli_query($conn,"SELECT * FROM users ORDER BY id DESC");

// while($extract = mysqli_fetch_array($result1)) {
// 	$user = $extract['username'];
	
// 	echo "'<a href='index.php?id='> . $user . </a>";
// }


?>
<form name="form2" action="login.php" method="post">
<table border="1" align="center">

<tr>
<td>Username: </td>
<td><input type="text" name="username"></td>
</tr>

<tr>
<td>Password: </td>
<td><input type="password" name="password"></td>
</tr>

<tr>
<td colspan="2"><input type="submit" name="submit" value="Login"></td>
</tr>

<tr>
<td colspan="2"><a href="register.php">Register here to get an account</a></td>
</tr>

</table>
</form>


<?php
exit;
}

?>

<html>
<head>
<title>Chat Box</title>

<script
  src="http://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>

<script>

function submitChat() {
	if(form1.msg.value == '') {
		alert("Enter your message!!!");
		return;
	}
	var msg = form1.msg.value;
	var xmlhttp = new XMLHttpRequest();
	
	xmlhttp.onreadystatechange = function() {
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById('chatlogs').innerHTML = xmlhttp.responseText;
		}
	}
	
	xmlhttp.open('GET','insert.php?msg='+msg,true);
	xmlhttp.send();

}

$(document).ready(function(e){
	$.ajaxSetup({
		cache: false
	});
	setInterval( function(){ $('#chatlogs').load('logs.php'); }, 2000 );
});

</script>


</head>
<body>
<form name="form1">
Your Chatname: <b><?php echo $_SESSION['username']; ?></b> <br />
Your Message: <br />
<textarea name="msg"></textarea><br />
<a href="#" onclick="submitChat()">Send</a><br /><br />

<a href="logout.php">Logout</a><br /><br />

</form>
<div id="chatlogs">
LOADING CHATLOG...
</div>

</body>