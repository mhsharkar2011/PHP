<?php

$db = new mysqli("localhost", "root", "root", "db_trip", 3306);

if (mysqli_connect_error()) {
    echo "Connection error";
    exit();
} else {
    echo "Connected Successfully.... <br><br>";
}


$sql = "SELECT * FROM trips";

$result = $db->query($sql);

if ($result) {
    while ($data = $result->fetch_object()) {
        echo "Trip ID: " . $data->id . "<br>";
        echo "Destination: " . $data->to_area . "<br>";
        echo "Duration: " . $data->distance . "<br>";
        echo "Price: " . $data->amount . "<br>";
        echo "--------------------------<br>";
    }

    $result->free(); // Free the result set
} else {
    echo "Query error: " . $db->error;
}

// $db->close(); // Close the database connection


$update = "UPDATE trips SET to_area='Mirpur-12,Dhaka' WHERE id='3'";
$result = $db->query($update);







?>
