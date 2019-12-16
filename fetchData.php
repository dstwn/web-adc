<?php
include_once('conn.php');
$data = array();
$host = "localhost";
$uname = "root";
$passwd = "";
$db = "_data";

$conn = new mysqli($host,$uname,$passwd,$db);
if($result = $conn -> query('SELECT * FROM data ORDER BY timeData DESC LIMIT 10')){
    while($row = $result -> fetch_array(MYSQLI_ASSOC)){
        $data[] = $row;
    }
    echo json_encode($data);
    $result->close();
}
$conn->close();
?>