<?php

require "../common/dbconn.php";

$super_cat = $_POST["superCat"];
$super_cat_name = $_POST["superCatName"];

$sql = "SELECT category_name FROM CATEGORY";

$rows = array();

if($super_cat != "cat_third_drop_down") {
    $sql = " SELECT category_name, super_category FROM CATEGORY where super_category='$super_cat_name' ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            array_push($rows, $row);
        }
    }
}
else  {

}

$json_result = json_encode($rows, JSON_UNESCAPED_UNICODE);
$json_result = urldecode($json_result);

echo($json_result);
$conn->close();

?>