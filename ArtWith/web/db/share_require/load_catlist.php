<?php

require "../common/dbconn.php";

$cat_num = $_POST["catNum"];

//echo($cat_num);

$sql = "SELECT category_name FROM CATEGORY";

$rows = array();

if($cat_num == "cat_first_drop_down") {
    $sql = " SELECT category_name, super_category FROM CATEGORY where super_category=\"null\" ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            array_push($rows, $row);
        }
    }
    else {
        echo "0 results";
    }
}

$json_result = json_encode($rows, JSON_UNESCAPED_UNICODE);
$json_result = urldecode($json_result);

echo($json_result);

$conn->close();

?>