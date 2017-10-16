<?php
$connect = mysqli_connect("localhost", "root", "", "eatadakicafe");

    $id = "replace this";

    $query = "DELETE from foodinfos WHERE class_name = ";  
    mysqli_query($connect, $query);
    
?>