<?php
header('Content-type: application/json');

$conn = mysqli_connect("localhost", "root", "") or die ("Not yet connected");
//Selecting Database
$db = mysqli_select_db($conn, "eatadakicafe") or die ("cannot select database");
//sql query to fetch information of registerd user and finds user match.

$sql = "SELECT * FROM foodInfos";
$result = mysqli_query($conn,$sql);
$counter = 0;

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "vr1: " . $row["vr1"]. " - vr2: " . $row["vr2"]. "<br>";
        $food[$counter]["foodName"] = $row["foodName"];
        $food[$counter]["foodDesc"] = $row["foodDesc"];
        $food[$counter]["foodPrice"] = $row["foodPrice"];
        $food[$counter]["foodImg"] = $row["foodImg"];
        $food[$counter]["position_x"] = $row["position_x"];
        $food[$counter]["class_name"] = $row["class_name"];
        // $foodName[$counter] = $row["foodName"];
        // $foodDesc[$counter] = $row["foodDesc"];
        // $foodPrice[$counter] = $row["foodPrice"];
        // $foodImg[$counter] = $row["foodImg"];
        $counter += 1;
    }
    echo json_encode($food);
    // print_r($food);
}
?>