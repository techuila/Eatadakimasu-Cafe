<?php
$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){

if(empty($_POST['user']) || empty($_POST['pass'])){
echo '<script>alert("Username or Password is Invalid")</script>';
}
else{
$user=$_POST['user'];
$pass=$_POST['pass'];

//Establishing Connection with server by passing server_name, user_id and pass as a patameter
$conn = mysqli_connect("localhost", "root", "") or die ("Not yet connected");
//Selecting Database
$db = mysqli_select_db($conn, "eatadakicafe") or die ("cannot select database");
//sql query to fetch information of registerd user and finds user match.
$query = mysqli_query($conn, "SELECT * FROM login WHERE password='$pass' AND username='$user'");

$rows = mysqli_num_rows($query);
if($rows != 0){
    while($row = mysqli_fetch_assoc($query)){
        session_start();
            $_SESSION['username'] = $user;
            echo '<script type="text/javascript">alert("Welcome '.$user.'")</script>'; 
            echo "<br/><a href='./php/logout.php'>logout</a>";
    }
}else{
    echo '<script>alert("Username or Password is incorrect!")</script>';
        }
    }
}


// $result = $conn->query($sql);
// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         $error = "<br> id: ". $row["userid"];
//         session_start();
//         $_SESSION["userid"] = $row["userid"];
//         echo '<script> alert("Login Successful") </script>';
//         // header("Location: order.php");
//     }
// } else {
//    $error = "Username and password is invalid";
// }
// }
// }
?>