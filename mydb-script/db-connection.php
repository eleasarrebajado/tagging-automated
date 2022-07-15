<?php

$host = "localhost";
$userName = "root";
$pass = "";
$dB = "automatedTaggingDb";

$conn = new mysqli($host, $userName, $pass, $dB);

if($conn->connect_error){
    die("connection failed" . $conn->connect_error);
 } //else {
//     echo "connection success";
// }