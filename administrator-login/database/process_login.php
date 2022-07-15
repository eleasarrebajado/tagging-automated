<?php

require_once 'db.php';
require_once 'function.php';

if(isset($_POST['login'])){
    $userLogin = filter_function($_POST['adminUser']);
    $userPass = filter_function($_POST['adminPass']);


    if(emptyInput($userLogin, $userPass) !== FALSE){
        header("location: ../login.php?error=emptyInput");
        exit();
    } 

    //===============================================
    if(inValidUser($userLogin) !== FALSE){
       header("location: ../login.php?error=invalidUser");
       exit();
    }


    //===============================================
    if(!$stmt = $conn->prepare("SELECT * FROM adminDashBoard WHERE adminDash=? AND adminPass=?")){
        header("location: ../login.php?error=stmterror");
    }else {
            $pwdhash = password_hash($userPass, PASSWORD_DEFAULT);

            $stmt->bind_param("ss", $userLogin, $userPass);
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();
            
            if($row['adminDash'] !== $userLogin){

                header("location: ../login.php?error=wronguserpass");

            } else  {

                if(password_verify($row['adminPass'], $pwdhash)){
                    header("location: ../../admin-dashboard/index.php?error=passSuccess");
                } else {
                    header("location: ../login.php?error=passwordnot");
                }
                
            }   
        }
           
} else {
    header("location: ../login.php?error=successlogin");
    exit();
}


function filter_function($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


