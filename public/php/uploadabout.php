<?php
$connect = mysqli_connect("localhost", "root", "", "eatadakicafe");  
     
     $file2 = addslashes(file_get_contents($_FILES['about-file']['tmp_name']));
     $query2 = "UPDATE `loaddisplay` SET `disp_img`='$file2' WHERE disp_section = 'about'";  
      
     if(mysqli_query($connect, $query2))  
       {  
            echo '<script>alert("Image Successfully Updated")</script>';  
       }  
       else{
           echo '<script>alert("There was a problem inserting the image")</script>';
       }
?>