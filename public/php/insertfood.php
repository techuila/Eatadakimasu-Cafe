<?php
    $connect = mysqli_connect("localhost", "root", "", "eatadakicafe");  
    if(isset($_POST["insert_menu"]))  
    {  
        $foodname = $_POST['food-name'];
        $fooddesc = $_POST['food-desc'];
        $foodprice = $_POST['food-qty'];
        $class_name = strtok($foodname,' ');  
        $file = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
        
        if($_POST["insert_menu"] == "Add"){
            
            // $query3 = "INSERT INTO foodinfos (foodName,foodDesc,foodPrice,foodImg,position_x,class_name) VALUES ('$foodname','$fooddesc','$foodprice','$file',-10,'$class_name')";
            
         // }else{
                $query3 =  "UPDATE `foodinfos` SET `foodName`='$foodname',`foodDesc`='$fooddesc',`foodPrice`='$foodprice',`foodImg`='$file',`position_x`=10,`class_name`='$class_name' WHERE id = 45";
    }

        $query1 = mysqli_query($connect, "SELECT * FROM foodinfos WHERE foodName='$foodname'");
       
        $rows = mysqli_num_rows($query1);
       if($rows == 0) {
        if(mysqli_query($connect, $query3))
            {  
                header('Refresh:.5; url=../temp.php');
                echo '<script>alert("Food Successfully added")</script>';  
            }  
            else{
                // header('Refresh:.5; url=../temp.php');
                echo '<script>alert("There was a problem adding")</script>';
            }
        }else{
                header('Refresh:.5; url=../temp.php');
                echo '<script>alert("Food name is already existing, please specfity another food name")</script>';
        }
    }  
    
    // $query = "INSERT INTO `foodinfos`(`foodName`, `foodDesc`, `foodPrice`, `foodImg`) VALUES ('$foodname','$foodesc','$foodprice','$file')";  
    // mysqli_query($connect, $query);
    // echo json_encode("bulati");
?>