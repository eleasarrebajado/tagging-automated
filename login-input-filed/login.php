<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b2fc4eafe2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/loginStyle.css">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <div class="login-main">
            <div class="login-main--box">
                <div class="login-main--box__container-a">
                    <img src="images/chbclogo.png">
                </div>

                <div class="login-main--box__container-b">
                    
                    <div class="input-text-a">
                        <div class="input-text-a__box-iconText-a">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="input-text-a__box-iconText-b">
                            <input type="text" placeholder="User Name:">
                        </div> 
                    </div><!-- this is the user -->
                    
                    <div class="input-text-b">
                        <div class="input-text-b__box-iconText--a">
                            <i class="fa-solid fa-key"></i>
                        </div>
                        <div class="input-text-b__box-iconText-b">
                            <input class="openTxt" type="password" placeholder="Password:">
                        </div>
                        <div class="input-text-b__box-iconText-b--showHide">
                            <img id="eyeIcon" src="images/eye-slash-solid.svg">
                        </div>
                    </div><!-- this is the password -->
                    <script src="js/main.js"></script>
                </div>

                <div class="login-main--box__container-c">
                    <div class="input-btn-a">
                        <span><a href="../administrator-login/login.php">Administrator</a></span>
                    </div>
                    <div class="input-btn-b">
                        <input type="submit" value="Login">
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>