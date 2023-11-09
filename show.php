<?php
// include "Config.php";
include "Database.php";

$obj = Database::getConnect();

$query = "SELECT * FROM users";

$results = $obj->select($query);

if ($results) {
    while ($data = $results->fetch_object()) {
        echo "ID: " . $data->id . "<br>";
        echo "Full Name: " . $data->first_name . "<br>";
        echo "Full Name: " . $data->last_name . "<br>";
        echo "Email: " . $data->email . "<br>";
        echo "--------------------------<br>";
    }
}


if ($results) {
    while ($data = $results->fetch_object()) {
        echo "ID: " . $data->id . "<br>";
        echo "Full Name: " . $data->full_name . "<br>";
        echo "Username: " . $data->username . "<br>";
        echo "Email: " . $data->email . "<br>";
        echo "--------------------------<br>";
    }
}
