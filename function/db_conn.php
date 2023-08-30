<?php

$conn = mysqli_connect("localhost","root","root","school_management");

$sql = "SELECT * FROM subject";

 $result = $conn->query($sql);



// echo "<pre>";
// var_dump($query);
// echo "</pre>";