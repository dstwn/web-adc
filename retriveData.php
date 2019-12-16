<?php
include_once('conn.php');
$json = array();
$host = "localhost";
$uname = "root";
$passwd = "";
$db = "_data";

$conn = new mysqli($host,$uname,$passwd,$db);
if($result = $conn -> query('SELECT * FROM `data` ORDER BY timeData DESC LIMIT 1')){
    while($row = $result -> fetch_array(MYSQLI_ASSOC)){
        $json[] = $row;
    }

    echo json_encode($json);
    $result->close();
}
$conn->close();

?>