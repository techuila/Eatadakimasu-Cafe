<?php
$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){

if(empty($_POST['user']) || empty($_POST['pass'])){
$error = "Username or Password is Invalid";
}
else
{
//Define $user and $pass
$user=$_POST['user'];
$pass=$_POST['pass'];
//Establishing Connection with server by passing server_name, user_id and pass as a patameter
$conn = mysqli_connect("localhost", "root", "");
//Selecting Database
$db = mysqli_select_db($conn, "eatadakicafe");
//sql query to fetch information of registerd user and finds user match.
$query = mysqli_query($conn, "SELECT userid FROM login WHERE password='$pass' AND username='$user'");

$sql = "SELECT userid FROM login WHERE password='$pass' AND username='$user'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $error = "<br> id: ". $row["userid"];
        session_start();
        $_SESSION["userid"] = $row["userid"];
        header("Location: order.php");
    }
} else {
   $error = "Username and password is invalid";
}
}
}
?>

