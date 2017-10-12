<?php
header('Content-type: application/json');

// Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost", "root", "") or die ("Not yet connected");
 //=============================================================================================
 //Selecting Database
 $db = mysqli_select_db($conn, "eatadakicafe") or die ("cannot select database");
 //=============================================================================================

 
//get unique orderid
$orderid = 0;
    do{
        $orderid +=1;
        
        $query = mysqli_query($conn, "SELECT * FROM orderinfo WHERE orderid='$orderid'");
        $rows = mysqli_num_rows($query);
    }while($rows > 0);
//=============================================================================================
        $tmpgustid = "";
        $guestid = 0;
        do{
            $guestid +=1;
            $tmpguestid = "G-" . $guestid;
            $query2 = mysqli_query($conn, "SELECT * FROM guestinfo WHERE guestid='$tmpguestid'");
            $rows = mysqli_num_rows($query2);
        }while($rows > 0);

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
$paymentmethod=$_POST['p-method'];
$cardtype=$_POST['card'];
$credcardnum=$_POST['c-num'];
$securitycode=$_POST['s-code'];
$expirationdate=$_POST['exp-start'] . " - " . $_POST['exp-end'];
    
        if(trim($fname == '') || trim($lname == '') || trim($month == '') || trim($day == '') || trim($year == '') || trim($barangay == '') || trim($email == '') || trim($mobile == '')){
            $error['message'] = "Please fill out all the required fields!";
            $error['check'] = true;
            echo json_encode($error);
        }
        
        else if(strpos($email, '@') !== false){

            // $foodName=$_POST['item'];
            // $foodQty=$_POST['qty'];
            // $foodPrice=$_POST['price'];
           
            mysqli_query($conn, "INSERT INTO guestinfo(guestID,Firstname,Lastname,Birthday,Gender,Barangay,Street,House_No,Email,Mobile_No) VALUES('$tmpguestid','$fname','$lname','$birthday','$gender','$barangay','$street','$hno','$email','$mobile')");
            mysqli_query($conn, "INSERT INTO paymentmethod(`billingid`, `p_method`, `c_type`, `c_num`, `s_num`, `exp_date`) VALUES ('$orderid','$paymentmethod','$cardtype','$credcardnum','$securitycode','$expirationdate')");
            $error['message'] = "Order Successful!, Please wait for customer service";
            $error['valid'] = true;
            echo json_encode($error);
            $counter = 0;

        //     do{
        //     //if not log in
        //     mysqli_query($conn, "INSERT INTO `orderinfo`(`orderid`, `customerID`, `foodName`, `quantity`, `price`) VALUES ('$orderid','$tmpguestid','$foodName[$counter]','$foodQty[$counter]','$foodPrice[$counter]')");
        //     $counter +=1;

        //     }while($counter < count($foodName));
        //    //if not log in
             
            mysqli_query($conn, "INSERT INTO `billinginfo`(`CustomerID`, `OrderID`, `Barangay`, `Street`, `House_No`, `Status`) VALUES ('$tmpguestid','$orderid','$barangay','$street','$hno','0')");
           //else
           
        }else{
            $error['message'] = "Please enter a valid email address (e.g eatadaki@gmail.com)";
            $error['valid'] = false;
            echo json_encode($error);
        }
           
?>