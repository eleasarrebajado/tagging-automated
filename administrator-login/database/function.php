<?php
require_once 'db.php';


function emptyInput($userAdmin, $userPass){
    $result;
    if(empty($userAdmin) || empty($userPass)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
} // THIS IS THE EMPTY INPUT ERROR



function inValidUser($userAdmin){
    $result;
    if(!preg_match("/^[a-zA-Z-0-9]*$/", $userAdmin)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
} // THIS IS THE INVALID USER ERROR


