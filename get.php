<?php
if (isset($_GET['username'])) {
    $name = $_GET['username'];
    echo $name;
} else {
    echo "Username parameter is not provided.";
}
?>