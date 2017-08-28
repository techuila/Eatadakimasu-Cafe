<?php  
 $connect = mysqli_connect("localhost", "root", "", "eatadakicafe");  
 if(isset($_POST["insert_image"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $name = $_POST['textname'];
      $query = "INSERT INTO images(image,name) VALUES ('$file','$name')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  
      else{
          echo '<script>alert("There was a problem inserting the image")</script>';
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
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">Insert and Display Images From Mysql Database in PHP</h3>  
                <br />  
                <form method="post" enctype="multipart/form-data">  
                     <input type="file" name="image" id="image" />  
                     <br />  
                     <textarea name="textname" rows="4" cols="50" placeholder="Name the image"></textarea>
                     <br />
                     <input type="submit" name="insert_image" id="insert" value="Upload Image" class="btn btn-info" />  
                </form>  
                <br />  
                <br />  
                <table class="table table-bordered">  
                     <tr>  
                          <th>Image</th> 
                          
                     </tr>  
                    
                <?php  
                $connect = mysqli_connect("localhost", "root", "", "eatadakicafe");  
                $query = "SELECT * FROM images";  
                $result = mysqli_query($connect, $query);
                while($row = mysqli_fetch_array($result))  
                {   
                    echo "<p>".$row['name']."</p>"; 
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="data:images/jpeg;base64,'.base64_encode($row['image'] ).'" 
                                    height="200" width="200" class="img-thumnail" />  
                                    
                                 </td>  
                          </tr>
                     ';
                        
                }  
                
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
