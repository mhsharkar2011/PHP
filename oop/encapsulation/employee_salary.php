<?php

$db = new mysqli("localhost","root"," ","db_trip");

if(mysqli_connect_error()){
    echo "Connection error";
    exit();
}else{
    echo "Connected Successfully....";
}
$sql = "SELECT * FROM trips";

$result = $db->query($sql);

$data = $result->fetch_object();

echo $data;