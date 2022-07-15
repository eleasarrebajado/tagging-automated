<?php
require_once 'dB.php';
require_once 'function.php';// THIS IS THE FUNCTION =========================
session_start();

if(isset($_POST['submit'])){

    $userAccount2 = validation($_POST['userAccount']); 
    $userAccPass2 = validation($_POST['userPassword']);
    $userName = validation($_POST['username']);
    $position = validation($_POST['position']);
    $emailaddress = validation($_POST['emailaddress']);
    
    $userProfile = validation($_FILES['file']['name']);
    $fileError2 = validation($_FILES['file']['error']);
    $fileSize2 = validation($_FILES['file']['size']);
    $fileType = validation($_FILES['file']['type']);
    $fileTmpName = $_FILES['file']['tmp_name'];

    if(inputEmpty($userAccount2, $userAccPass2, $userName, $position, $userProfile) !== FALSE){
        header("location: ../index.php?inputempty");
        $_SESSION['message'] = "<span style='color: red;'>ERROR! </span> EMPTY INPUT!";
        $_SESSION['msgbgstyle'] = "#3e868e";
        exit();
    }

    if(invalidUser($userAccount2) !== FALSE){
        header("location: ../index.php?error=invaliduser");
        $_SESSION['message'] = "<span style='color: red;'>ERROR! </span> INVALID USER!";
        $_SESSION['msgbgstyle'] = "#3e868e";
        exit();
    }

    if(existUid2($userAccount2, $conn) !== FALSE){
        header("location: ../index.php?error=userexist");
        $_SESSION['message'] = "<span style='color: red;'>ERROR! </span> USER EXIST!";
        $_SESSION['msgbgstyle'] = "#3e868e";
        exit();
    }

    if(userPassExist2($userAccPass2, $conn) !== FALSE){
        header("location: ../index.php?error=passwordexist");
        $_SESSION['message'] = "<span style='color: red;'>ERROR! </span> PASSWORD EXIST!";
        $_SESSION['msgbgstyle'] = "#3e868e";
        exit();
    }


    //===================================================================
    // THIS IS THE IMAGE VALIDATION =====================================
    //===================================================================


    if(fileError2($fileError2) !== FALSE){
        header("location: ../index.php?error=fileError");
        $_SESSION['message'] = "<span style='color: red;'>ERROR! </span> FILE ERROR!";
        $_SESSION['msgbgstyle'] = "#3e868e";
    }

    if(fileSize2($fileSize2) !== FALSE){
        header("location: ../index.php?error=fileSizeError");
        $_SESSION['message'] = "<span style='color: red;'>ERROR! </span> SIZE OF THE FILE IS TOO BIG!";
        $_SESSION['msgbgstyle'] = "#3e868e";
    } 


    $fileExtension2 = explode(".", $userProfile);
    $fileActualExt2 = strtolower(end($fileExtension2));
    $allowedFile2 = array('jpg', 'jpge', 'png', 'pdf');

    if(allowedExtension($fileActualExt2, $allowedFile2) !== FALSE){
            $imageFullName2 = $userProfile; // . "." . uniqid(" ", true) . "." . $fileActualExt2;
            $fileDestination2 = "../images/uploadsImages/" .$imageFullName2;
            move_uploaded_file($fileTmpName, $fileDestination2);
    } else {
        header("location: ../index.php?error=fileTypeError");
        $_SESSION['message'] = "<span style='color: red;'>ERROR! </span> YOU NOT ALLOWED TO UPLOAD THIS KIND OF FILE ONLY JPG, JPGE, PNG, PDF!";
        $_SESSION['msgbgstyle'] = "#3e868e";
        exit();
    }



    

    if(!$stmt = $conn->prepare("INSERT INTO adminDashBoard(adminDash, adminPass, username, position, emailaddress, userProfile) VALUES (?,?,?,?,?,?)")){
        header("location: ../index.php?error=stmtfailed");
    } else {
        $stmt->bind_param("ssssss", $userAccount2, $userAccPass2, $userName, $position, $emailaddress, $userProfile);
        $stmt->execute();
        header("location: ../index.php?error=Success");
        $_SESSION['message'] = "<span style='color: red;'>GOOD JOB! </span> SUCCESS!";
        $_SESSION['msgbgstyle'] = "#3e868e";
        exit();
    }// this is when all the validation false it will insert the data ==================


}



// THIS IS THE DELETE DIVISION ===============================================

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $stmt = $conn->prepare("DELETE FROM adminDashBoard WHERE iD_admin_Dash=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    if($stmt->affected_rows == 0){
        header("location: ../index.php?error=delete");
        $_SESSION['message'] = "<span style='color: #36476f;'>ALRIGHT! </span> NA DELETE NA KUYA!";
        $_SESSION['msgbgstyle'] = "red";
    } 
}


//THIS IS THE UPDATE DIVISION 

$userName=$userAccountadmin=$userPass=$emailAddress=$position=$name="";
$id = 0;
$update = false;

if(isset($_GET['edit'])){
    $update = true;
    $id = $_GET['edit'];
    $stmt = $conn->prepare("SELECT * FROM adminDashBoard WHERE iD_admin_Dash=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0){
        $row = $result->fetch_array();
        $userAccountadmin = $row['adminDash'];
        $userName = $row['username'];
        $emailAddress = $row['emailaddress'];
        $position = $row['position'];
    }
    $stmt->close();

}






if(isset($_POST['update'])){    
    $id = validation($_POST["id"]);
    $userAccount2 = validation($_POST['userAccount']);
    $userName = validation($_POST['username']);
    $userAccPass2 = validation($_POST['userPassword']);
    $position = validation($_POST['position']);
    $emailaddress = validation($_POST['emailaddress']);



    if(inputEmpty($userAccount2, $userAccPass2, $userName, $position, $userProfile) !== FALSE){
        header("location: ../index.php?inputempty");
        $_SESSION['message'] = "<span style='color: red;'>ERROR! </span> EMPTY INPUT!";
        $_SESSION['msgbgstyle'] = "#3e868e";
        exit();
    }


    $stmt = $conn->prepare("UPDATE adminDashBoard SET adminDash=?, username=?, adminPass=?, position=?, emailaddress=?  WHERE iD_admin_Dash=?");
    $stmt->bind_param("sssssi", $userAccount2, $userName, $userAccPass2, $position, $emailaddress, $id);
    $stmt->execute();
    if($stmt->num_rows > 0){
        echo "failed";
    }else {
        $_SESSION['message'] = "Successful Update";
        header("location: ../index.php?error=successUpdate");
    }
        $stmt->close();
}





// THIS IS ANOTHER FORM DIVISION ==================================================
// THIS IS ANOTHER FORM DIVISION ==================================================
// THIS IS ANOTHER FORM DIVISION ==================================================
// THIS IS ANOTHER FORM DIVISION ==================================================
// THIS IS ANOTHER FORM DIVISION ==================================================
// THIS IS ANOTHER FORM DIVISION ==================================================
// THIS IS ANOTHER FORM DIVISION ==================================================
// THIS IS ANOTHER FORM DIVISION ==================================================
// THIS IS ANOTHER FORM DIVISION ==================================================
// THIS IS ANOTHER FORM DIVISION ==================================================




if(isset($_POST['usersubmit'])){

    $userAccount2 = validation($_POST['useraccount']);
    $userAccPass2 = validation($_POST['userpassword']);
    $userName = validation($_POST['usersname']);
    $position = validation($_POST['position']);
    $emailaddress = validation($_POST['useremailadd']);


    $userProfile = validation($_FILES['file']['name']);
    $fileError2 = validation($_FILES['file']['error']);
    $fileSize2 = validation($_FILES['file']['size']);
    $fileType = validation($_FILES['file']['type']);
    $fileTmpName = $_FILES['file']['tmp_name'];


    if(inputEMpty($userAccount2, $userAccPass2, $userName, $position, $emailaddress, $userProfile) !== FALSE){
        header("location: ../index.php?error=inputEMpty");
        $_SESSION['message'] = "<span style='color: red;'>ERROR! </span> EMPTY INPUT!";
        $_SESSION['msgbgstyle'] = "#3e868e";
        exit();
    }// this is the input empty user =================

    if(InvalidUser($userAccount2) !== FALSE){
        header("location: ../index.php?error=invalidUser");
        $_SESSION['message'] = "<span style='color: red;'>ERROR! </span> INVALID USER!";
        $_SESSION['msgbgstyle'] = "#3e868e";
        exit();
    }// this is the useraccount =======================

    if(existUid($userAccount2, $conn) !== FALSE){
        header("location: ../index.php?error=UserExist");
        $_SESSION['message'] = "<span style='color: red;'>ERROR! </span> USER EXIST!";
        $_SESSION['msgbgstyle'] = "#3e868e";
        exit();
    }// this isthe user exist ============================

    if(userPassExist($userAccPass2, $conn) !== FALSE){
        header("location: ../index.php?error=passExist");
        $_SESSION['message'] = "<span style='color: red;'>ERROR! </span> PASSWORD EXIST!";
        $_SESSION['msgbgstyle'] = "#3e868e";
        exit();
    }
    //===================================================================
    // THIS IS THE IMAGE VALIDATION =====================================
    //===================================================================

    if(fileError2($fileError2) !== FALSE){
        header("location: ../index.php?error=fileError");
        $_SESSION['message'] = "<span style='color: red;'>ERROR! </span> FILE ERROR!";
        $_SESSION['msgbgstyle'] = "#3e868e";
    }

    if(fileSize2($fileSize2) !== FALSE){
        header("location: ../index.php?error=fileSizeError");
        $_SESSION['message'] = "<span style='color: red;'>ERROR! </span> SIZE OF THE FILE IS TOO BIG!";
        $_SESSION['msgbgstyle'] = "#3e868e";
    } 


    $fileExtension2 = explode(".", $userProfile);
    $fileActualExt2 = strtolower(end($fileExtension2));
    $allowedFile2 = array('jpg', 'jpge', 'png', 'pdf');

    if(allowedExtension($fileActualExt2, $allowedFile2) !== FALSE){
            $imageFullName2 = $userProfile; // . "." . uniqid(" ", true) . "." . $fileActualExt2;
            $fileDestination2 = "../images/uploadsImages/" .$imageFullName2;
            move_uploaded_file($fileTmpName, $fileDestination2);
    } else {
        header("location: ../index.php?error=fileTypeError");
        $_SESSION['message'] = "<span style='color: red;'>ERROR! </span> YOU NOT ALLOWED TO UPLOAD THIS KIND OF FILE ONLY JPG, JPGE, PNG, PDF!";
        $_SESSION['msgbgstyle'] = "#3e868e";
        exit();
    }

    // THIS IS THE EDIT VALIDATION ================================

  




    //INSERT DATA AFTER ALL VALIDATION ===========================
    if(!$stmt = $conn->prepare("INSERT INTO userDashBoard(useracc, userpass, username_user, position, emailaddress, userprofilePic) VALUES (?,?,?,?,?,?)")){
        header("location: ../index.php?error=stmtfailed");
    } else {
        $stmt->bind_param("ssssss", $userAccount2, $userAccPass2, $userName, $position, $emailaddress, $userProfile);
        $stmt->execute();
        header("location: ../index.php?error=Success");
        $_SESSION['message'] = "<span style='color: red;'>GOOD JOB! </span> SUCCESS!";
        $_SESSION['msgbgstyle'] = "#3e868e";
        exit();
    }// this is when all the validation false it will insert the data ==================


}

//THIS IS THE UPDATE DIVISION ===========================================


$id_user = 0;
$update_user = false;
$userName_user=$userPass_user=$emailAddress_user=$position_user=$name_user="";

if(isset($_GET['edituser'])){
    $update_user = true;
    $id_user = validation($_GET['edituser']);
    $stmt = $conn->prepare("SELECT * FROM userDashBoard WHERE iD_users=?");
    $stmt->bind_param("i", $id_user);
    $stmt->execute();

    $result = $stmt->get_result();
    if($row = $result->fetch_array()){
        $userName_user = $row['useracc'];
        $userPass_user = $row['userpass'];
        $emailAddress_user = $row['emailaddress'];
        $position_user = $row['position'];
        $name_user = $row['username_user'];
    }
    $stmt->close();
}

if(isset($_GET['deleteuser'])){
    $id_user = $_GET['deleteuser'];
    $stmt = $conn->prepare("DELETE FROM userDashBoard WHERE iD_users=?");
    $stmt->bind_param("i", $id_user);
    $stmt->execute();

    if($stmt->affected_rows == 0){
        header("location: ../index.php?error=delete");
            $_SESSION['message'] = "<span style='color: red;'>GOOD JOB! </span> DELETED SUCCESS!";
            $_SESSION['msgbgstyle'] = "#3e868e";
            exit();
    }

}

    



if(isset($_POST['update_user'])){
    $id_user = validation($_POST['id_user']);
    $userAccount2 = validation($_POST['useraccount']);
    $userAccPass2 = validation($_POST['userpassword']);
    $username = validation($_POST['usersname']);
    $position = validation($_POST['position']);
    $emailaddress = validation($_POST['useremailadd']);


    if(existUid($userAccount2, $conn) !== FALSE){
        header("location: ../index.php?error=UserExist");
        $_SESSION['message'] = "<span style='color: red;'>ERROR! </span> USER EXIST!";
        $_SESSION['msgbgstyle'] = "#3e868e";
        
    }// this isthe user exist ============================
    

    if(userPassExist($userAccPass2, $conn) !== FALSE){
        header("location: ../index.php?error=passExist");
        $_SESSION['message'] = "<span style='color: red;'>ERROR! </span> PASSWORD EXIST!";
        $_SESSION['msgbgstyle'] = "#3e868e";
        exit();
    }


    $stmt = $conn->prepare("UPDATE userDashBoard SET useracc=?, userpass=?, username_user=?, position=?, emailaddress=? WHERE iD_users=?");
    $stmt->bind_param("sssssi", $userAccount2, $userAccPass2, $username, $position, $emailaddress, $id_user);
    $stmt->execute();

    if($stmt->num_rows > 0){
        echo "failed";
    } else {
        header("location: ../index.php?error=success");
        $_SESSION['message'] = "<span style='color: red;'>GOOD JOB! </span> UPDATED SUCCESSFULLY!";
        $_SESSION['msgbgstyle'] = "#3e868e";
        exit();
    }
    $stmt->close();
}




//FUNCTION ===============================
//FUNCTION ===============================


function validation($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}



