<?php
header('Content-type: application/json');

// Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost", "root", "") or die ("Not yet connected");
 //=============================================================================================
 //Selecting Database
 $db = mysqli_select_db($conn, "eatadakicafe") or die ("cannot select database");
 //
$sql = "SELECT * FROM loaddisplay";
$result = mysqli_query($conn,$sql);
$counter = 0;

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "vr1: " . $row["vr1"]. " - vr2: " . $row["vr2"]. "<br>";
        $banner[$counter] = base64_encode($row["disp_section"]);
        $counter += 1;
    }
    echo json_encode($banner);
    // print_r($food);
}

 ?>