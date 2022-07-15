<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://kit.fontawesome.com/b2fc4eafe2.js" crossorigin="anonymous"></script>
    <title>Automated tagging System</title>
</head>
<body>
    <div class="container_main">
        <div class="container_main--lft_box">
            <div class="container_main--img_box">
                <img src="images/chbclogo.png"><br>
                <p>TAGGING SYSTEM</p><br>
                <h1>CHBC BANILAD</h1>
            </div>
            <div class="container_main--btn_container">
               <div class="btnInput-1">REGULAR PRICETAG</div>
               <div class="btnInput-2">COOL PRICETAG</div>
               <div class="btnInput-3">ROCA PRICETAG</div>
               <div class="btnInput-4">DELTA PRICETAG</div>
               <div class="btnInput-5">BUILD PRICETAG</div>
               <div class="btnInput-6">AQUAMIX PRICETAG</div>
               <div class="btnInput-7">BEST VALUE PRICETAG</div>
               <div class="btnInput-8">CLERANCE SALE PRICETAG</div>
               <div class="btnInput-9">CUSTOMISE TAGGING</div>
            </div>
        </div>
        
        <div class="container_main--right_box">
            <h5>Sample text for tagging</h5>
            <div class="form-inputFiled">
                <span class="btnClose">×</span>
                <div class="form-inputFiled_box">
                    <span class="form-inputFiled_box--tittle">
                        <h4>REGULAR TAGGING</h4><br>
                        <p>Please check all the details if it's correct or not before<br>Submmiting.</p>
                    </span>
                    <hr style="margin-top: 1rem; width: 100%; margin: 0 auto;">
                    <div class="form-inputFiled_box--drp">
                        <div class="form-input-box">
                            <label>Brand Name:</label>
                            <input type="text">
                            <label>Aticle:</label>
                            <input type="text">

                            <div class="form-input-box__btn">
                                <input type="button" value="SUBMIT">
                                <label class="files"><i class="fa-solid fa-file-arrow-up"></i> FILE
                                    <input type="file" value="CHOOSE FILE">
                                </label>            
                                <input type="button" class="up" value="UPLOAD">
                                <input type="button" class="del" value="DELETE ALL">
                            </div>
                        </div>
                        <div class="form-input-box">
                            <label>Article Description:</label>
                            <input type="text">
                            <label>Price:</label>
                            <input type="text">
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <script src="js/main.js"></script>
    </div>
    
</body>
</html>