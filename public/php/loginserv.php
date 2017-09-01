<?php
header('Content-type: application/json');
// echo '<script>alert("Username or Password is incorrect!")</script>';
$error=''; //Variable to Store error message;
// if(isset($_POST['submit'])){
if(empty($_POST['user']) || empty($_POST['pass'])){    
}else{
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $cust_info = array();
    

    //Establishing Connection with server by passing server_name, user_id and pass as a patameter
    $conn = mysqli_connect("localhost", "root", "") or die ("Not yet connected");
    //Selecting Database
    $db = mysqli_select_db($conn, "eatadakicafe") or die ("cannot select database");
    //sql query to fetch information of registerd user and finds user match.

    $sql = "SELECT * FROM login,customerinfo WHERE login.password='$pass' AND login.username='$user'";
    $result = mysqli_query($conn,$sql);


    if(mysqli_num_rows($result) != 0){
        while($rows = mysqli_fetch_assoc($result)){
            $cust_info = array_merge($cust_info, $rows);
        }    
        $cust_info['success'] = true;
        echo json_encode($cust_info);
        session_start();
        $_SESSION['username'] = $user;  
    }else{
        $cust_info['success'] = false;
        echo json_encode($cust_info);
    }
}
// }

?>