<?php
header('Content-type: application/json'); 

    $username=$_POST['username'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $fname=$_POST['first-name'];
    $lname=$_POST['last-name'];
    $birthday=$_POST['year'] . "-" . $_POST['month'] . "-" . $_POST['day'] ;
    $gender=$_POST['gender']; 
    $barangay=$_POST['barangay'];
    $street=$_POST['street'];
    $hno=$_POST['h-no'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $day=$_POST['day'];
    $month=$_POST['month'];
    $year=$_POST['year'];

        // Establishing Connection with server by passing server_name, user_id and pass as a patameter
        $conn = mysqli_connect("localhost", "root", "") or die ("Not yet Connected: " . mysql_error);
        //Selecting Database
        $db = mysqli_select_db($conn, "eatadakicafe") or die ("cannot select Database: " . mysql_error);
        //insert query        
        $query = mysqli_query($conn,"SELECT * FROM login WHERE username='$_POST[username]'");
        $rows = mysqli_num_rows($query);
<<<<<<< HEAD
        
        //check out fields
    if(trim($username == '') || trim($password == '') || trim($fname == '') || trim($lname == '') || trim($cpassword == '') || trim($month == '') || trim($day == '') || trim($year == '') || trim($barangay == '') || trim($email == '') || trim($mobile == '')){
        $error['message'] = "Please fill out all the required fields!";
        $error['check'] = true;
        echo json_encode($error);
    }
        //check if username is existing
        else if($rows == 0){
            //check if password and confirm password is the same
            if($_POST['password']==$_POST['cpassword']){
                //check if valid email address
                if(strpos($email, '@') !== false){
                mysqli_query($conn, "INSERT INTO customerinfo(username,Firstname,Lastname,Birthday,Gender,Barangay,Street,House_No,Email,Mobile_No) VALUES('$username','$fname','$lname','$birthday','$gender','$barangay','$street','$hno','$email','$mobile')"); 
                mysqli_query($conn, "INSERT INTO login(Username,Password) VALUES('$username','$password')"); 
                $error['match'] = true;
                $error['valid'] = true;
                $error['message'] = "Register Successful!";
                $error['exist'] = true;
                echo json_encode($error);
                }else{
                    $error['message'] = "Please enter a valid email address (e.g eatadaki@gmail.com)";
                    $error['valid'] = false;
                    echo json_encode($error);
                }
            }else{
                $error['message'] = "Password doesn't even matched!";
                $error['match'] = false;
                echo json_encode($error);
            }
            
        }else{
            $error['message'] = "Username already existing";
            $error['exist'] = false;
            echo json_encode($error);
    }
        
=======

        if($rows == 0){
            mysqli_query($conn, "INSERT INTO customerinfo(username,Firstname,Lastname,Birthday,Gender,Barangay,Street,House_No,Email,Mobile_No) VALUES('$username','$fname','$lname','$birthday','$gender','$barangay','$street','$hno','$email','$mobile')"); 
            mysqli_query($conn, "INSERT INTO login(Username,Password) VALUES('$username','$password')"); 
            mysqli_close($conn);
            $error['message'] = "Register Successful!";
            $error['exist'] = false;
            echo json_encode($error);            
        }else{
            $error['message'] = "Username already existing";
            $error['exist'] = true;
            echo json_encode($error);
            
        }
    // else{
    // }



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
>>>>>>> a20ec8ef0f75578ff8c02da53aa547fe40149296
?>