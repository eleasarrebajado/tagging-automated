<?php
require_once 'db.php';
require_once 'function.php';
session_start();


if(isset($_POST['submit'])){
    $userName = validation(strtolower($_POST['userName']));
    $userPass = validation($_POST['userPass']);



    if(emptyInput($userName, $userPass) !== FALSE){
        header("location: ../login.php?error=EmptyInput");
        $_SESSION['error'] = "<span style='color: red; font-weight: bold'>EMPTY</span><br> Your for got to put user and password";
        exit();
    }

    if(invalidUser($userName) !== FALSE){
        header("location: ../login.php?error=InvalidUser");
        $_SESSION['error'] = "<span style='color: red; font-weight: bold'>$userName</span><br> Sorry this is invalid User";
        exit();
    }

    if(wrongUser($userName) !== FALSE){
        header("location: ../login.php?error=WrongBranch");
        $_SESSION['error'] = "<span style='color: red; font-weight: bold'>$userName</span><br>Oops!! I think this is not your user account or Branch";
        exit();
    }


    if(!$stmt = $conn->prepare("SELECT * FROM userDashBoard WHERE useracc=? AND userpass=?")){
        header("location: ../login.php?error=StmtFailed");
    } else {
        $pwdhash = password_hash($userPass, PASSWORD_DEFAULT);

        $stmt->bind_param("ss", $userName, $userPass);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if(password_verify($row['userpass'], $pwdhash)){
            header("location: ../../landing-page-banilad/index.php?error=PasswordSuccess");
           
        } else {
            header("location: ../login.php?error=passLoginError");
            $_SESSION['error'] = "<span style='color: red; font-weight: bold'>$userPass</span><br>Is not your password";
            exit();
        }
    }

}

