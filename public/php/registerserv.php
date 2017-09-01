<?php
header('Content-type: application/json'); 
$error=''; //Variable to Store error message;

    $username=$_POST['username'];
    $password=$_POST['password'];
    $fname=$_POST['first-name'];
    $lname=$_POST['last-name'];
    $birthday=$_POST['year'] . "-" . $_POST['month'] . "-" . $_POST['day'] ;
    $gender=$_POST['gender']; 
    $barangay=$_POST['barangay'];
    $street=$_POST['street'];
    $hno=$_POST['h-no'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];

    if(!preg_match(("/[^[:alnum:]]/"), $username)){

        // Establishing Connection with server by passing server_name, user_id and pass as a patameter
        $conn = mysqli_connect("localhost", "root", "") or die ("Not yet Connected: " . mysql_error);
        //Selecting Database
        $db = mysqli_select_db($conn, "eatadakicafe") or die ("cannot select Database: " . mysql_error);
        
        $query = mysqli_query($conn,"SELECT * FROM login WHERE username='$_POST[username]'");
        $rows = mysqli_num_rows($query);

        if($rows == 0){
            if($_POST['password']==$_POST['cpassword']){
                mysqli_query($conn, "INSERT INTO customerinfo(Username,Firstname,Lastname,Birthday,Gender,Barangay,Street,House_No,Email,Mobile_No) VALUES('$username','$fname','$lname','$birthday','$gender','$barangay','$street','$hno','$email','$mobile')"); 
                mysqli_query($conn, "INSERT INTO login(Username,Password) VALUES('$username','$password')"); 
                echo '<script>alert("Registration Successful!")</script>';
        }else{
            echo '<script>alert("password not matched!")</script>';
        }
         
    }else{
        echo '<script>alert("contains alphanumeric")</script>';    }
    }



// $fname=strip_tags($_POST['first-name']);
// $mname=strip_tags($_POST['middle-name']);
// $lname=strip_tags($_POST['last-name']);
// $username=$_POST["username"];
// $password=strip_tags($_POST['password']);
// $hno=strip_tags($_POST['h-no']);
// $email=strip_tags($_POST['email']);
// $street=strip_tags($_POST['street']);
// $barangay=strip_tags($_POST['barangay']);
// $mobile=strip_tags($_POST['mobile']);



// $query = "SELECT * FROM login WHERE username='$username'";
// $rows = mysqli_num_rows($query);
// if($rows == 1){
// echo "username already existing!";
// }
// else
// {
// mysqli_query($conn, "INSERT INTO customerinfo(Username,fname,mname,lname,houseno,street,barangay,email,contact) VALUES ('$username','$fname','$mname','$lname','$hno', '$street','$barangay','$email','$mobile')");
// mysqli_query($conn, "INSERT INTO login(Username,Password) VALUES ('$username','$password')");

// }
// }
// }else{
// echo '<script>alert("Username must only contain alpha numeric")</script>';

// }
// }
?>