<?php
$conn = mysqli_connect("localhost", "root", "") or die ("Not yet connected");
//Selecting Database
$db = mysqli_select_db($conn, "testing") or die ("cannot select database");
//sql query to fetch information of registerd user and finds user match.

//loaddisplay.php
$banner = "";
$aboutimg = "";
$aboutheader ="";
$aboutparagraph = "";
$navigation = "";
$sql = "SELECT * FROM loadDisplay";
$result = mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if ($row["disp_section"] == "menubanner") {
            $banner = $row["disp_img"];
        }
        if ($row["disp_section"] == "orderbanner") {
            $banner = $row["disp_img"];
        }
        if ($row["disp_section"] == "about") {
            $aboutimg = $row["disp_img"];
            $aboutheader =$row["disp_header"];
            $aboutparagraph = $row["disp_paragraph"];
        }
        if ($row["disp_section"] == "navigation") {
            $navigation = $row["disp_img"];
        }
    }
}
    //loadslider.php
    $sql = "SELECT sliderimg,headerslider,paragraphslider FROM loadSlider";
    $result = mysqli_query($conn,$sql);
    $counter = 0;
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $sliderimg[$counter]["sliderimg"] = $row["slider_img"];
            $sliderimg[$counter]["headslider"] = $row["slider_head"];
            $sliderimg[$counter]["paragrahpslider"] = $row["slider_paragraph"];

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