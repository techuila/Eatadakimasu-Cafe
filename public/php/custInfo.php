<?php
    header('Content-type: application/json');

    // session_start();

    // $cust = array(
    //     'success' => true
    // );
    // $cust = array_merge($cust, $_SESSION['customer']);
    echo json_encode($_POST['user']);
?>