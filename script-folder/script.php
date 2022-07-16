<?php
$serverName = 'localhost';
$userName = 'root';
$pass = "";
$db = "automatedTaggingDb";

$conn = new mysqli($serverName, $userName, $pass, $db);
if($conn->connect_error){
    die("connection failed".$conn->connect_error);
} else {
    echo "success";
}




// $sql = "CREATE DATABASE automatedTaggingDb";
// if($conn->query($sql) === true){
//     echo "successful create database";
// } else {
//     echo "failed to create database" .$conn->error;
// }
// $conn->close();

// $sql = "CREATE TABLE adminDashBoard(
//     iD_admin_Dash INT(6)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     userProfile VARCHAR(200)NOT NULL,
//     username VARCHAR(200)NOT NULL,
//     adminDash VARCHAR(200)NOT NULL,
//     adminPass VARCHAR(200)NOT NULL,
//     position VARCHAR(200)NOT NULL,
//     emailaddress VARCHAR(200)NOT NULL, 
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// if($conn->query($sql) === true){
//     echo "successful created a table";
// } else {
//     echo "failed to create table" .$conn->error;
// }

// $conn->close();


// THIS IS THE USERS DIVISION =========================================================


// $sql = "CREATE TABLE userDashBoard(
//     iD_users INT(6)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     userprofilePic VARCHAR(200)NOT NULL,
//     username_user VARCHAR(200)NOT NULL,
//     useracc VARCHAR(200)NOT NULL,
//     userpass VARCHAR(200)NOT NULL,
//     position VARCHAR(200)NOT NULL,
//     emailaddress VARCHAR(200)NOT NULL,
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// if($conn->query($sql) === true){
//     echo "successful created a table";
// } else {
//     echo "failed to create table" .$conn->error;
// }

// $conn->close();



//===================================================================================
// THIS IS THE SRCRIPT FOR REGULAR TAGGING
//===================================================================================


// $sql = "CREATE TABLE reg_Tag(
//     reg_id INT(9)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     reg_brand_name VARCHAR(200)NOT NULL,
//     reg_price VARCHAR(200)NOT NULL,
//     reg_descript VARCHAR(200)NOT NULL,
//     reg_article VARCHAR(200),

//     regular_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// if($conn->query($sql) === true){
//     echo "new table reg tag created";
// } else {
//     echo "failed to create table reg_tag" .$conn->error;
// }

// THIS IS THE REG PORTRAIT DIVISON ===========================

// $sql = "CREATE TABLE reg_Tag_prt(
//     reg_id2 INT(9)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     reg_brand_name2 VARCHAR(200)NOT NULL,
//     reg_price2 VARCHAR(200)NOT NULL,
//     reg_descript2 VARCHAR(200)NOT NULL,
//     reg_article2 VARCHAR(200),
//     regular_date2 TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// if($conn->query($sql) === true){
//     echo "new table reg tag created";
// } else {
//     echo "failed to create table reg_tag" .$conn->error;
// }

// THIS IS THE COOL TAG DIVISION ===============================

// $sql = "CREATE TABLE cool_Tag(
//     cool_id INT(9)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     cool_brand_name VARCHAR(200)NOT NULL,
//     cool_price VARCHAR(200)NOT NULL,
//     cool_descript VARCHAR(200)NOT NULL,
//     cool_article VARCHAR(200)NOT NULL,
//     cool_tittle VARCHAR(200)NOT NULL,
//     cool_prdct_name VARCHAR(200)NOT NULL,
//     cool_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// $sql = "CREATE TABLE cool_Tag_prt(
//     cool_id2 INT(9)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     cool_brand_name2 VARCHAR(200)NOT NULL,
//     cool_price2 VARCHAR(200)NOT NULL,
//     cool_descript2 VARCHAR(200)NOT NULL,
//     cool_article2 VARCHAR(200)NOT NULL,
//     cool_tittle_prt VARCHAR(200)NOT NULL,
//     cool_prdct_name_prt VARCHAR(200)NOT NULL,
//     cool_date2 TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";
    

// if($conn->query($sql) === true){
//     echo "success created table cool tag";
// } else {
//     echo "failed to create table cool" .$conn->error;
// }

//======================================================================================
// THIS IS THE ROCA TAGGING DIVISSION ===================================================
//=======================================================================================

// $sql = "CREATE TABLE roca_prt(
//     roca_id INT(9)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     roca_brand_name VARCHAR(200)NOT NULL,
//     roca_price VARCHAR(200)NOT NULL,
//     roca_descript VARCHAR(200)NOT NULL,
//     roca_article VARCHAR(200)NOT NULL,
//     roca_tittle_prt VARCHAR(200)NOT NULL,
//     roca_prdct_name_prt VARCHAR(200)NOT NULL,
//     roca_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// if($conn->query($sql) === true){
//     echo "success created table for roca tagging";
// } else {
//     echo "failed to create table roca " .$conn->error;
// }

//========================================================================================
// THIS IS THE BUILD TAGGING DIVISSION ===================================================
//========================================================================================

// this is the build portrait ===========================================
// this is the build portrait ===========================================
// this is the build portrait ===========================================
// this is the build portrait ===========================================


// $sql = "CREATE TABLE build_prt(
//     build_id_prt INT(9)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     build_brand_name VARCHAR(200)NOT NULL,
//     build_price VARCHAR(200)NOT NULL,
//     build_descript VARCHAR(200)NOT NULL,
//     build_article VARCHAR(200)NOT NULL,
//     build_tittle_prt VARCHAR(200)NOT NULL,
//     build_prdct_name_prt VARCHAR(200)NOT NULL,
//     build_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";


// if($conn->query($sql) === true){
//     echo "Success created table for build tagging";
// } else {
//     echo "Failed to create build tagging";
// }

// this is the build landscape =============================================
// this is the build landscape =============================================
// this is the build landscape =============================================
// this is the build landscape =============================================


// $sql = "CREATE TABLE build_lndscape(
//     build_id_lndscape INT(9)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     build_brand_name VARCHAR(200)NOT NULL,
//     build_price VARCHAR(200)NOT NULL,
//     build_descript VARCHAR(200)NOT NULL,
//     build_article VARCHAR(200)NOT NULL,
//     build_tittle VARCHAR(200)NOT NULL,
//     build_prdct_name VARCHAR(200)NOT NULL,
//     build_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// if($conn->query($sql) === true){
//     echo "Success created table buil landscape";
// } else {
//     echo "Failed to create table build landscape" .$conn->error;
// }


// this is the aquamix division ================================================
// this is the aquamix division ================================================
// this is the aquamix division ================================================
// this is the aquamix division ================================================
// this is the aquamix division ================================================


// $sql = "CREATE TABLE aquamix_prt(
//     aquamix_id_prt INT(9)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     aquamix_brand_name VARCHAR(200)NOT NULL,
//     aquamix_price VARCHAR(200)NOT NULL,
//     aquamix_descript VARCHAR(200)NOT NULL,
//     aquamix_article VARCHAR(200)NOT NULL,
//     aquamix_tittle VARCHAR(200)NOT NULL,
//     aquamix_prdct_name VARCHAR(200)NOT NULL,
//     aquamix_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// if($conn->query($sql) === true){
//     echo "Success created table aquamix portraint";
// } else {
//     echo "Failed to create aquamix table portrait" .$conn->error;
// }

// thi is the aquamix landscape division ==============================================
// thi is the aquamix landscape division ==============================================
// thi is the aquamix landscape division ==============================================
// thi is the aquamix landscape division ==============================================
// thi is the aquamix landscape division ==============================================


// $sql = "CREATE TABLE aquamix_landscape(
//     aquamix_id_landscape INT(9)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     aquamix_brand_name VARCHAR(200)NOT NULL,
//     aquamix_price VARCHAR(200)NOT NULL,
//     aquamix_descript VARCHAR(200)NOT NULL,
//     aquamix_article VARCHAR(200)NOT NULL,
//     aquamix_tittle VARCHAR(200)NOT NULL,
//     aquamix_prdct_name VARCHAR(200)NOT NULL,
//     aquamix_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// if($conn->query($sql) === true){
//     echo "Success created table aquamix landscape";
// } else {
//     echo "Failed to create aquamix table portrait" .$conn->error;
// }