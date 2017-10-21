<?php
$connect = mysqli_connect("localhost", "root", "", "eatadakicafe");  
     
     $file2 = addslashes(file_get_contents($_FILES['order-file']['tmp_name']));
     $query2 = "UPDATE `loaddisplay` SET `disp_img`='$file2' WHERE disp_section = 'orderbanner'";  
      
     if(mysqli_query($connect, $query2))  
       {  
            header('Refresh:.5; url=../temp.php');
            echo '<script>alert("Image Successfully Updated")</script>';  
       }  
       else{
           header('Refresh:4; url=../temp.php');
           echo '<script>alert("There was a problem inserting the image")</script>';
       }
?>