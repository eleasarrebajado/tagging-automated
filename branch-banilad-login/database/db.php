<?php

$hosting = "localhost";
$serverName = "root";
$pass = "";
$db = "automatedTaggingDb";


$conn = new mysqli($hosting, $serverName, $pass, $db);

if($conn->connect_error){
    die("connection failed" .$conn->connect_error);
    exit();
}
