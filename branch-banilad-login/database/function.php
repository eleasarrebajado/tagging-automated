<?php

function emptyInput($userName, $userPass){
    $result;
    if(empty($userName) || empty($userPass)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}


function invalidUser($userName){
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $userName)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function wrongUser($userName){
    $result;
    if($userName !== 'banilad'){
        $result = TRUE;
    } else {
        $result = FALSE;
    }
    return $result;
}











function validation($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
