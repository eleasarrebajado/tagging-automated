<?php

$serverName = "localhost";
$userServer = "root";
$pass = "";
$db = "automatedTaggingDb";

$conn = new mysqli($serverName, $userServer, "", $db);
if($conn->connect_error){
    die("connection error");
    exit();
} 