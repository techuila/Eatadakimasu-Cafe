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

parse_str($_POST['datas'], $searcharray);


$fname=$searcharray['first-name'];
$lname=$searcharray['last-name'];
$birthday=$searcharray['year'] . "-" . $searcharray['month'] . "-" . $searcharray['day'] ;
$gender=$searcharray['gender']; 
$barangay=$searcharray['barangay'];
$street=$searcharray['street'];
$hno=$searcharray['h-no'];
$email=$searcharray['email'];
$mobile=$searcharray['mobile'];
$day=$searcharray['day'];
$month=$searcharray['month'];
$year=$searcharray['year'];
$paymentmethod=$searcharray['p-method'];
$cardtype=$searcharray['card'];
$credcardnum=$searcharray['c-num'];
$securitycode=$searcharray['s-code'];
$expirationdate=$searcharray['exp-start'] . " - " . $searcharray['exp-end'];

$foodOrder=$_POST['data'];


    
        if(trim($fname == '') || trim($lname == '') || trim($month == '') || trim($day == '') || trim($year == '') || trim($barangay == '') || trim($email == '') || trim($mobile == '')){
            $error['message'] = "Please fill out all the required fields!";
            $error['check'] = true;
            echo json_encode($error);
        }
        
        else if(strpos($email, '@') !== false){
            mysqli_query($conn, "INSERT INTO guestinfo(guestID,Firstname,Lastname,Birthday,Gender,Barangay,Street,House_No,Email,Mobile_No) VALUES('$tmpguestid','$fname','$lname','$birthday','$gender','$barangay','$street','$hno','$email','$mobile')");
            mysqli_query($conn, "INSERT INTO paymentmethod(`billingid`, `p_method`, `c_type`, `c_num`, `s_num`, `exp_date`) VALUES ('$orderid','$paymentmethod','$cardtype','$credcardnum','$securitycode','$expirationdate')");
            $error['message'] = "Please wait until customer service will contact you";
            $error['valid'] = true;
            echo json_encode($error);
            $counter = 1;

        //     do{
        // //     //if not log in
        //     mysqli_query($conn, "INSERT INTO `orderinfo`(`orderid`, `customerID`, `foodName`, `quantity`, `price`) VALUES ('$orderid','$tmpguestid','$foodOrder[$counter]['name']','$foodOrder[$counter]['qty']','$foodOrder[$counter]['price']')");
        //     $counter +=1;

        //     }while($counter < count($foodOrder) + 1);
        //    //if not log in
             
            mysqli_query($conn, "INSERT INTO `billinginfo`(`CustomerID`, `OrderID`, `Barangay`, `Street`, `House_No`, `Status`) VALUES ('$tmpguestid','$orderid','$barangay','$street','$hno','0')");
        //    //else
           
        }else{
            $error['message'] = "Please enter a valid email address (e.g eatadaki@gmail.com)";
            $error['valid'] = false;
            echo json_encode($error);
        }
           
?>