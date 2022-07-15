<?php
require_once 'db.php';

if(isset($_POST['deleteAllreg'])){
    $stmt = $conn->prepare("TRUNCATE TABLE reg_Tag");
    $stmt->get_result();
    $stmt->execute();

    if($stmt->affected_rows == 0){
        header("location: ../regLandscape.php?error=DeleteAll");
    }
}

// this is the regular portrait division ===============

if(isset($_POST['deleteAllregPrt'])){
    $stmt2 = $conn->prepare("TRUNCATE TABLE reg_Tag_prt");
    $stmt2->get_result();
    $stmt2->execute();

    if($stmt2->affected_rows == 0){
        header("location: ../regPortrait.php?error=DeleteAll");
    }

}

// this is the cool landscape division ==================

if(isset($_POST['deleteAllCool'])){
    $stmt = $conn->prepare("TRUNCATE TABLE cool_Tag");
    $stmt->get_result();
    $stmt->execute();

    if($stmt->affected_rows == 0){
        header("location: ../index.php?error=DeleteAll");
    }
}


// this is the cool portrait division ====================

if(isset($_POST['deleteAllCool'])){
    $stmt = $conn->prepare("TRUNCATE TABLE cool_Tag_prt");
    $stmt->get_result;
    $stmt->execute();

    if($stmt->affected_rows == 0){
        header("location: ../coolPrt.php?error=DeleteAll");
    }
}


// this is the roca portrait division ========================

if(isset($_POST['deleteAllRoca'])){
    $stmt = $conn->prepare("TRUNCATE TABLE roca_prt");
    $stmt->get_result();
    $stmt->execute();

    if($stmt->affected_rows == 0){
        header("location: ../rocaPrt.php?error=DeleteAll");
    }
}


// this is the build portrait division =========================

if(isset($_POST['deleteBuildPrt'])){
    $stmt = $conn->prepare('TRUNCATE TABLE build_prt');
    $stmt->get_result();
    $stmt->execute();

    if($stmt->affected_rows == 0){
        header("location: ../buildPrt.php?error=DeleteAll");
    }
}

// this is the build landscape division ========================

if(isset($_POST['deleteBuildLndscape'])){
    $stmt = $conn->prepare('TRUNCATE TABLE build_lndscape');
    $stmt->get_result();
    $stmt->execute();

    if($stmt->affected_rows == 0){
        header("location: ../buildLandscape.php?error=DeleteAll");
    }
}