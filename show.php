<?php
include "Config.php";
include "Database.php";

$obj = Database::getConnect();

$query = "SELECT * FROM users";

$results = $obj->select($query);


// $query = "SELECT * FROM users";
// $results = $db->select($query);

if ($results) {
    while ($data = $results->fetch_object()) {
        echo "Trip ID: " . $data->id . "<br>";
        echo "Destination: " . $data->full_name . "<br>";
        echo "Duration: " . $data->username . "<br>";
        echo "Price: " . $data->email . "<br>";
        echo "--------------------------<br>";
    }

    $results->free(); // Free the result set
}
