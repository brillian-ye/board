<?php

$db_host = "127.0.01";
$db_id = "root";
$db_pw = "1234";
$db_name = "board";

$conn = mysqli_connect($db_host, $db_id, $db_pw, $db_name);

if(mysqli_connect_errno()) {
        die("DB Connect Error: ".mysqli_connect_error());
}


?>

