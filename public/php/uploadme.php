<?php
    header('Content-type: application/json');
    // $info = $_POST['datas'];
    parse_str($_POST['datas'], $searcharray);
    echo json_encode($searcharray['first-name']);
    
?>