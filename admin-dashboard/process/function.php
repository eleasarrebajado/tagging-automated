<?php


function inputEMpty($userAccount2, $userAccPass2, $userProfile){
    $result;
    if(empty($userAccount2) || empty($userAccPass2) || empty($userProfile)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}


// THIS IS THE INVALID USER ==================

function InvalidUser($userAccount2){
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $userAccount2)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function existUid($userAccount2, $conn){
    $result;
    if(!$stmt = $conn->prepare("SELECT * FROM userDashBoard WHERE useracc=?")){
        header("location: ../index.php?error=stmtfailed");
    } else {
        $stmt->bind_param("s", $userAccount2);
        $stmt->execute();
        $rslt = $stmt->get_result();

        if($rslt->num_rows > 0){
            $result = true;
        } else {
            $result = false;
            return $result;
        }
    }
}

function existUid2($userAccount2, $conn){
    $result;
    if(!$stmt = $conn->prepare("SELECT * FROM adminDashBoard WHERE adminDash=?")){
        header("location: ../index.php?error=stmtfailed");
    } else {
        $stmt->bind_param("s", $userAccount2);
        $stmt->execute();
        $rslt = $stmt->get_result();

        if($rslt->num_rows > 0){
            $result = true;
        } else {
            $result = false;
            return $result;
        }
    }
}

function userPassExist($userAccPass2, $conn){
    $result;
    if(!$stmt = $conn->prepare("SELECT * FROM userDashBoard WHERE userpass=?")){
        header("location: ../index.php?error=stmtfailed");
    } else {
        $stmt->bind_param("s", $userAccPass2);
        $stmt->execute();
        $rslt = $stmt->get_result();

        if($rslt->num_rows > 0){
            $result = true;
        } else {
            $result = false;
            return $result;
        }
    }
}// this is the user password exist validation =======================

function userPassExist2($userAccPass2, $conn){
    $result;
    if(!$stmt = $conn->prepare("SELECT * FROM adminDashBoard WHERE adminPass=?")){
        header("location: ../index.php?error=stmtfailed");
    } else {
        $stmt->bind_param("s", $userAccPass2);
        $stmt->execute();
        $rslt = $stmt->get_result();

        if($rslt->num_rows > 0){
            $result = true;
        } else {
            $result = false;
            return $result;
        }
    }
}// this is the user password exist validation =======================

//THIS IS THE THE IMAGE FILTER =======================================

function fileError2($fileError){
    $result;
    if($fileError == 0){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}// this is the file error validation ==================

function fileSize2($fileSize2){
    $result;
    if($fileSize2 > 500000){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}// this is the file size validation ===============

function allowedExtension($fileActualExt2, $allowedFile2){
    $result;
    
    if(in_array($fileActualExt2, $allowedFile2)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}


// THIS IS THE FILTER VALIDATION BASIC FUNCTION 

