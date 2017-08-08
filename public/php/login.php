<?php
include("loginserv.php"); // Include loginserv for checking username and password
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Login | Eatadakimasu Cafe</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <style>
            body{
                background-image: url('../img/bg.png');
                background-repeat: no-repeat;
                background-size: cover;
                font-family: 'roboto';
                margin: 100px auto;
                display: block;
            }

            fieldset{
                width: 500px;
                margin: auto;
            }

            input{
                display: block;
            }
        </style>
    </head>
    <body>
        <fieldset>
            <legend>Login</legend>
            <center>
                <form action="" method="post">
                <span>Username:</span>
                <input type="text" name="user" value=""><br>
                <span>Password:</span>
                <input type="text" name="pass" value=""><br><br>
                <button type="submit" name="submit">Login</button>
                <button type="button">Cancel</button>
                <!-- Error Message -->
            <span><?php echo $error; ?></span>
            </center>
        </fieldset>
        
    </body>
</html>