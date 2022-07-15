<?php

$hosting = "localhost";
$userName = "root";
$pass = "";

$conn = new mysqli($hosting, $userName, $pass);

if($conn->connect_error){
    die("connection failed" .$conn->connect_error);
}
echo "successfully connected";