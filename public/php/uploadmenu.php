<?php
    
   $connect = mysqli_connect("localhost", "root", "", "eatadakicafe");
   
   $file = addslashes(file_get_contents($_FILES['menu-file']['tmp_name']));
   $query = "UPDATE `loaddisplay` SET `disp_img`='$file' WHERE disp_section = 'menubanner'";  
     if(mysqli_query($connect, $query))  
     {  
        header('Refresh:.5; url=../temp.php');
        echo '<script>alert("Image Successfully Updated!")</script>';  
     }  
    
     else{
         header('Refresh:4; url=../temp.php');
         echo '<script>alert("There was a problem inserting the image")</script>';
     }
    //  sleep(3);
    //  header('Location: ../temp.php'); 
?>