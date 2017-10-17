<?php
$connect = mysqli_connect("localhost", "root", "", "eatadakicafe");

    $id = $_POST['data'];

    $query = "DELETE from foodinfos WHERE class_name = '$id'";  
    mysqli_query($connect, $query);
    echo json_encode("Fucking done");
?>