<?php
$conn = mysqli_connect("localhost", "root", "") or die ("Not yet connected");
//Selecting Database
$db = mysqli_select_db($conn, "testing") or die ("cannot select database");
//sql query to fetch information of registerd user and finds user match.

$sql = "SELECT * FROM test";
$result = mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "vr1: " . $row["vr1"]. " - vr2: " . $row["vr2"]. "<br>";
    }
}
/* $a = 0;
while($a < 3) {
    $test[$a] = $a;
    $a += 1;
}
$b = 0;
while($b < 3) {
    echo $test[$b];
    $b += 1;
} */
?>