<?php
include("registerserv.php"); // Include loginserv for checking username and password
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Register | Eatadakimasu Cafe</title>

        <style>

             body{
                background: url('./img/bg.png');
                background-size: cover;
                background-repeat: no-repeat;
                font-family: 'roboto';
                margin: 100px auto;
            }
            .billing-address{
                display: none;
            }

            fieldset{
                width: 500px;
                margin: auto;
            }

            input{
                display: block;
                margin: auto;
            }

            .drop-down{
                display: inline-block;
                height: 20px;
                width: 20px;
                background: url('./img/60995.png'); 
                background-size: 100% 100%; 
                background-repeat: no-repeat;
                cursor: pointer;
            }
        </style>

        <script>
            var degr = 0;     
            
            function dropdown_clicked(){
                const bg = document.getElementById('dropdown');
                const ba = document.getElementById('billing-address');
                if(degr == 0){
                    degr = 1;
                    bg.style.transform = "rotate(180deg)";
                    ba.style.display = "block";
                } 
                else{
                    degr = 0;                    
                    bg.style.transform = "rotate(0deg)";
                    ba.style.display = "none";
                }
            }
        </script>
    </head>
    <body>

        <!--LOGIN FORM  -->
        <form action="" method="post">
            <fieldset>
                <legend>Register</legend>
                <center>
                <span><?php echo $error; ?></span>
                <span>Name: </span>
                <input type="text" name="customer-name"><br>   
                <span>Username:</span>
                <input type="text" name="username"><br>
                <span>Password:</span>
                <input type="text" name="password"><br>
                <span>Confirm Password:</span>
                <input type="text" name="confirm-password"><br>
                <br>
                <span style="color: blue;">Address:</span> 
                <div class="drop-down" onclick="dropdown_clicked();" id="dropdown"></div>    
                <br>    
                <div class="billing-address" id="billing-address">
                    <br>
                    Company:
                    <input type="text" name="company"><br>
                    Email:
                    <input type="text" name="email"><br>
                    Address:
                    <input type="text" name="address"><br>
                    Mobile/ Telephone #:
                    <input type="text" name="mobile"><br>  
                </div>
                </center>
                <br> 
                <center>
                    <button type="submit" name="register">Register</button>
                    <button type="button">Cancel</button>
                    <span><?php echo $error; ?></span>
                </center>
            </fieldset>
        </form>
    </body>
</html>