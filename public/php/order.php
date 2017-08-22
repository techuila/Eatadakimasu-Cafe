<?php

include("orderserv.php");
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    First name: <input type="text" name="fname" value=""><br>
    Middle name: <input type="text" name="mname" value=""><br>
    Last name: <input type="text" name="lname" value=""><br>
    House no: <input type="text" name="hnum" value=""><br>
    Street: <input type="text" name="street" value=""><br>
    Barangay: <input type="text" name="barangay" value=""><br>
    Email Address: <input type="text" name="email" value=""><br>
    Contact Number: <input type="text" name="contact" value=""><br>
    <input type="submit" name ="submit">
    </form>

    <form action="" method="post">
        <h1>order Logged in</h1>
    Item Name: <input type="text" name="itemName" value=""><br>
    qty: <input type="text" name="qty" value=""><br>
    Price: <input type="text" name="price" value=""><br>
    <input type="submit" name ="Order">
    <span><?php echo $error; ?></span>
    </form>
</body>
</html>