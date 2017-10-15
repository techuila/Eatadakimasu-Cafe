<?php  

 $connect = mysqli_connect("localhost", "root", "", "eatadakicafe");  
 if(isset($_POST["insert_image"]))  
 {  
   
      // $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
    //   $name = $_POST["textname"];
      $fileDestination = "../img/menu/".basename($_FILES['image']['name']);
      $name = $_FILES['image']['name'];
      $query = "UPDATE `images` SET `img_name`='$name'"; 
       $filetmp = $_FILES['image']['tmp_name'];
      move_uploaded_file($filetmp,$fileDestination);
      
      $query2 = mysqli_query($connect,"SELECT * FROM images ");

      $sql = "SELECT * FROM images";
      $result = mysqli_query($connect,$sql);
      $counter = 0;
      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
              $disp_img = "../img/menu/".$row['img_name'];
          }    
        }
        // rename('../img/menu/'. $name,'../img/menu/04.jpg');
        // unlink('../img/back-to-top-arrow.png');
        // rename('../img/menu/04.jpg','../img/'. $name .'');
        if(mysqli_query($connect,$query)) 
        {  
          echo '<script>alert("Image Inserted into Database")</script>';  

          //        if (move_uploaded_file($_FILES["image"]["tmp_name"], $fileDestination)) {
            
    //            echo "<script type='text/javascript'>alert('Image successfully uploaded!')</script>";
          
    //   }  
    //   else{
    //       echo '<script>alert("There was a problem inserting the image")</script>';
    //   }
          }else {
  
               echo "<script type='text/javascript'>alert('Image failed to upload!')</script>";
          }
          }
 ?>  

<!DOCTYPE html>  
 <html>  
      <head>  
            <title> Save and View Image in Database</title>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <style>
             body{
               background-image: url(<?php echo $disp_img; ?>);
               background-repeat: no-repeat;
               background-size: cover;
               color: white;
             }

           </style>
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">Insert and Display Images From Mysql Database in PHP</h3>  
                <br />  
                <form method="post" enctype="multipart/form-data">  
                     <input type="file" name="image" id="image" />  
                     <br />  
                     <!-- <textarea name="textname" rows="4" cols="50" placeholder="Name the image"></textarea>
                     <br /> -->
                     <input type="submit" name="insert_image" id="insert" value="Upload Image" class="btn btn-info" />  
                </form>  
                <br />  
                <br />  
                <table class="table table-bordered">  
                     <tr>  
                          <th>Image</th> 
                          
                     </tr>  
                    
                <?php  
                // $connect = mysqli_connect("localhost", "root", "", "eatadakicafe");  
                // $query = "SELECT * FROM images";  
                // $result = mysqli_query($connect, $query);
                // while($row = mysqli_fetch_array($result))  
                // {   
                //     echo "<p>".$row['name']."</p>"; 
                //      echo '  
                //           <tr>  
                //                <td>  
                //                     <img src="data:images/jpeg;base64,'.base64_encode($row['image'] ).'" 
                //                     height="200" width="200" class="img-thumnail" />  
                                    
                //                  </td>  
                //           </tr>
                //      ';
                        
                // }  
                
                ?>  
                </table>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           { 
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  
