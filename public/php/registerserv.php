<?php
header('Content-type: application/json'); 

    //CUSTOMER INFO

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

    //ORDER INFO

    
        


        // Establishing Connection with server by passing server_name, user_id and pass as a patameter
        $conn = mysqli_connect("localhost", "root", "") or die ("Not yet Connected: " . mysql_error);
        //Selecting Database
        $db = mysqli_select_db($conn, "eatadakicafe") or die ("cannot select Database: " . mysql_error);
        //insert query        
        $query = mysqli_query($conn,"SELECT * FROM login WHERE username='$_POST[username]'");
        $rows = mysqli_num_rows($query);
        $tmpcustid = "";
        $custid = 0;
        do{
            $custid +=1;
            $tmpcustid = "C-" . $custid;
            $query2 = mysqli_query($conn, "SELECT * FROM customerinfo WHERE customerID='$tmpcustid'");
            $rows2 = mysqli_num_rows($query2);
        }while($rows2 > 0);
        
        //check out fields
    if(trim($username == '') || trim($password == '') || trim($fname == '') || trim($lname == '') || trim($cpassword == '') || trim($month == '') || trim($day == '') || trim($year == '') || trim($barangay == '') || trim($email == '') || trim($mobile == '')){
        $error['titi'] = "Empty Fields!";
        $error['message'] = "Please fill out all the required fields!";
        $error['check'] = true;
        echo json_encode($error);
    }
        //check if username is existing
        else if($rows == 0){
            //check if minimum password is greater than 6
            if(strlen($password) > 6){
            //check if password and confirm password is the same
            if($_POST['password']==$_POST['cpassword']){
                //check if valid email address
                if(strpos($email, '@') !== false){
               
                mysqli_query($conn, "INSERT INTO customerinfo(customerID,username,Firstname,Lastname,Birthday,Gender,Barangay,Street,House_No,Email,Mobile_No) VALUES('$tmpcustid','$username','$fname','$lname','$birthday','$gender','$barangay','$street','$hno','$email','$mobile')"); 
                mysqli_query($conn, "INSERT INTO login(Username,Password,Usertype) VALUES('$username','$password','Customer')"); 
                $error['match'] = true;
                $error['leng'] = true;
                $error['valid'] = true;
                $error['titi'] = "Register Successful" ;
                $error['message'] = "Thank you for Registering!";
                $error['exist'] = true;
                echo json_encode($error);
                }else{
                    $error['titi'] = "Invalid Email!";
                    $error['message'] = "Please enter a valid email address (e.g eatadaki@gmail.com)";
                    $error['valid'] = false;
                    echo json_encode($error);
                }
            }else{
                $error['titi'] = "Password doesn't match!";
                $error['message'] = "Please make sure your passwords are match.";
                $error['match'] = false;
                echo json_encode($error);
            }
        }else{
            $error['titi'] = "Password length is too short!";
            $error['message'] = "Please enter more than 6 characters.";
            $error['leng'] = false;
            echo json_encode($error);
        }
    }else{
        $error['titi'] = "Existing Username!";
        $error['message'] = "Sorry, Username is already existing.";
        $error['exist'] = false;
        echo json_encode($error);
}
?>