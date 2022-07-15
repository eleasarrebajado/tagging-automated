<?php
    require_once 'database/db.php';
    require_once '../admin-dashboard/process/process.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b2fc4eafe2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/loginStyle2.css">
    <title>Document</title>
</head>

<body>
        <!-- THIS IS THE PREVENT BACKGROUND AFTER LOGOUT -->
<script>
        window.history.forward();
</script>
<!-- THIS IS THE PREVENT BACKGROUND AFTER LOGOUT -->
    <div class="videblackColor"></div>
    <div class="video-container">
        <video autoplay loop muted>
            <source  src="images/annon3.mp4" type="video/mp4">
        </video>
    </div>

    <form method="post" action="database/process_login.php">    
    <div class="login-main">
            <div class="login-main--box">
                <div class="login-main--box__container-a">
                    <img src="images/i-t-logo.jpg">
                </div>
                <div class="input-btn-a">
                    <span><a href="../administrator/login.php">ADMINISTRATOR</a></span>
                </div>
                <div class="login-main--box__container-b">
                    
                    <div class="input-text-a">
                        <div class="input-text-a__box-iconText-a">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="input-text-a__box-iconText-b">
                            <input type="text" name="adminUser" placeholder="User Name:">
                        </div> 
                    </div><!-- this is the user -->
                    
                    <div class="input-text-b">
                        <div class="input-text-b__box-iconText--a">
                            <i class="fa-solid fa-key"></i>
                        </div>
                        <div class="input-text-b__box-iconText-b">
                            <input class="openTxt" type="password" name="adminPass" placeholder="Password:">
                        </div>
                        <div class="input-text-b__box-iconText-b--showHide">
                            <img id="eyeIcon" src="images/eye-slash-solid.svg">
                        </div>
                    </div><!-- this is the password -->
                    <script src="js/main.js"></script>
                </div>

                <div class="login-main--box__container-c">
                    <div class="input-btn-b">
                        <input type="submit" name="login" value="Login">
                    </div>
                    <div class="error-div">
                        <?php
                            if(isset($_GET['error'])){
                                if($_GET['error'] === "emptyInput"){
                                    echo "<h4 style='color: red;'>you have to input data</h4>";
                                }

                                if($_GET['error'] === "invalidUser"){
                                    echo "<h4 style='color: red;'>invalid user!</h4>";
                                }

                                if($_GET['error'] === "wronguserpass"){
                                    echo "<h4 style='color: red;'>wrong user or password!</h4>";
                                }
                            }
                        
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>