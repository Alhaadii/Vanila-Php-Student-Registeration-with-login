<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "course";

// $connection = new mysqli("localhost", "root", "", "course");
$connection = new mysqli($host, $user, $password, $database);

if ($connection->connect_error) {
    echo "database connection error";
} else {
    // echo "database connection ok";
}
