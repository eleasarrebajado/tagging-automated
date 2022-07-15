<?php 

session_start();
session_unset();
session_destroy();

header("location: ../../administrator-login/login.php?error=logout");