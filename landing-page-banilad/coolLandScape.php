<?php
require_once 'process_tag/db.php';
require_once 'process_tag/process.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylesheet.css">
    <title>Document</title>
</head>
<body>
    <div class="top-menu">
        <div class="top-menu__container">
            <div class="top-menu__container--box-a">
                <p>CEBU HOME AND BUILDERS</p>
            </div>
            <div class="top-menu__container--box-b">
                <img src="images/chbc-logo-white.png">
            </div>
        </div>

        <div class="top-menu__container">
            <div class="top-menu__container__container">
                <div class="top-container-box">
                    <div class="top-container-box__menu-box-a">
                        <div class="menu-box-a--container-a">
                            <div class="image-box">
                                <img src="images/eleasar.jpg">
                            </div>
                        </div>
                        <div class="menu-box-a--container-b">
                            <p>Eleasar Rebajado</p>
                        </div>
                    </div>
                </div>
                <div class="top-container-box__menu-box-b">
                    <p>Log out</p>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper">
        <div class="nav-side-a">
            <div class="menu">
                <h4>MENU</h4><br>
                <h3>TAGGING</h3>
            </div>
            <div class="tagging-div"> 
                <ul class="tagging-div__container">
                    <li>
                        <div id="listBtn" class="list-btn">REGULAR TAGGING</div>
                        <div class="list-btn__list-container">
                            <form id="listDrop-a" method="post" action="process_tag/process.php" enctype="multipart/form-data">
                                <p>portrait</p>                           
                                <input type="file" name="file2" value="upload">
                                <input type="submit" name="regularPortrait" value="submit">
                                <input type="submit" name="deleteAllregPrt" value="Delete All">
                                <div class="tagg-links">
                                    <ul>
                                        <li><a href="regLandscape.php">Go Back to Landscape</a></li>
                                    </ul>
                                </div>
                                <p>Landscape</p>
                                <input type="file" name="file" value="upload">
                                <input type="submit" name="regUpload" value="submit">
                                <input type="submit" name="deleteAllreg" value="Delete All">
                                <div class="tagg-links">
                                    <ul>
                                        <li><a href="regPortrait.php">Go Back to Portrait</a></li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </li>
<!-- END OF THE DIVISION -->
                    <li>
                        <div id="listBtn-b" class="list-btn">COOL</div>
                        <div class="list-btn__list-container">
                            <form id="listDrop-b" method="post" action="process_tag/process.php" enctype="multipart/form-data">
                                <p>portrait</p>
                                <input type="file" name="fileCoolPrt" value="upload">
                                <input type="submit" name="coolPrt" value="submit">
                                <input type="submit" name="deleteAllCool" value="Delete All">
                                <div class="tagg-links">
                                    <ul>
                                        <li><a href="coolLandscape.php">Go Back to Landscape</a></li>
                                    </ul>
                                </div>
                                <p>Landscape</p>
                                <input type="file" name="fileCool" value="upload">
                                <input type="submit" name="coolLandscape" value="submit">
                                <input type="submit" name="deleteAllCool" value="Delete All">
                                <div class="tagg-links">
                                    <ul>
                                        <li><a href="coolPrt.php">Go Back to Portrait</a></li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </li>
<!-- END OF THE DIVISION -->
                    <li>
                        <div id="listBtn-c" class="list-btn">ROCA</div>
                        <div class="list-btn__list-container">
                            <form id="listDrop-c" method="post" action="process_tag/process.php" enctype="multipart/form-data">
                                <p>portrait</p>
                                <input type="file" name="fileRocaPrt" value="upload">
                                <input type="submit" name="rocaPrt" value="submit">
                                <input type="submit" name="deleteAllRoca" value="submit">
                                <hr>
                                <p>Landscape</p>
                                <input type="file" value="upload" disabled>
                                <input type="submit" action="" value="submit" disabled>
                            </form>
                        </div>
                    </li>
<!-- END OF THE DIVISION -->
                    <li>
                        <div id="listBtn-d" class="list-btn">BUILD</div>
                        <div class="list-btn__list-container">
                            <form id="listDrop-d" method="post" action="process_tag/process.php" enctype="multipart/form-data">
                                <p>portrait</p>
                                <input type="file" name="fileBuild" value="upload">
                                <input type="submit" name="buildPrt" value="submit">
                                <input type="submit" name="deleteBuildPrt" value="Delete All">
                                <div class="tagg-links">
                                    <ul>
                                        <li><a href="buildLandscape.php">Go Back to Landscape</a></li>
                                    </ul>
                                </div>
                                <p>Landscape</p>
                                <input type="file" name="fileBuildLndscape" value="upload">
                                <input type="submit" name="buildLandscape" value="submit">
                                <input type="submit" name="deleteBuildLndscape" value="Delete All">
                                <div class="tagg-links">
                                    <ul>
                                        <li><a href="buildPrt.php">Go Back to Portrait</a></li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </li>
<!-- END OF THE DIVISION -->
                    <li>
                        <div id="listBtn-e" class="list-btn">AQUAMIX</div>
                        <div class="list-btn__list-container">
                            <form id="listDrop-e" method="post" action="process_tag/process.php" enctype="multipart/form-data">
                                <p>portrait</p>
                                <input type="file" name="fileAquamixPrt" value="upload">
                                <input type="submit" name="aquamixPortrait" value="submit">
                                <input type="submit" name="deleteAllAquaPrt" value="Delete All">
                                <div class="tagg-links">
                                    <ul>
                                        <li><a href="aquamixLndscape.php">Go Back to Landscape</a></li>
                                    </ul>
                                </div>
                                <p>Landscape</p>
                                <input type="file" name="fileAquamixLndscape" value="upload">
                                <input type="submit" name="aquamixLandscape" value="submit">
                                <input type="submit" name="deleteAllAquaLndscape" value="Delete All">
                                <div class="tagg-links">
                                    <ul>
                                        <li><a href="aquamixPrt.php">Go Back to Portrait</a></li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </li>
<!-- END OF THE DIVISION -->
                    <li>
                        <div id="listBtn-f" class="list-btn">BEST VALUE</div>
                        <div class="list-btn__list-container">
                            <form id="listDrop-f" method="post" action="">
                                <p>portrait</p>
                                <input type="file" value="upload">
                                <input type="submit" action="" value="submit">
                                <hr>
                                <p>Landscape</p>
                                <input type="file" value="upload">
                                <input type="submit" action="" value="submit">
                            </form>
                        </div>
                    </li>
<!-- END OF THE DIVISION -->
                    <li>
                        <div id="listBtn-g" class="list-btn">CLEARANCE</div>
                        <div class="list-btn__list-container">
                            <form id="listDrop-g" method="post" action="">
                                <p>portrait</p>
                                <input type="file" value="upload">
                                <input type="submit" action="" value="submit">
                                <hr>
                                <p>Landscape</p>
                                <input type="file" value="upload">
                                <input type="submit" action="" value="submit">
                            </form>
                        </div>
                    </li>
<!-- END OF THE DIVISION -->
                    <li>
                        <div id="listBtn-h" class="list-btn sample">CUSTOMISE TAGGING</div>
                        <div class="list-btn__list-container">
                            <form id="listDrop-h" method="post" action="">
                                <p>portrait</p>
                                <input type="file" value="upload">
                                <input type="submit" action="" value="submit">
                                <hr>
                                <p>Landscape</p>
                                <input type="file" value="upload">
                                <input type="submit" action="" value="submit">
                            </form>
                        </div>
                    </li>                      
                </ul>
                    
                </div>
            </div>

            <div class="nav-side-b">
                <div class="nav-menu">
                    <div class="nav-menu__wrapper">
                        <div class="nave-menu_btn"></div>
                    </div>
                </div>
                <div class="tagging-container">
                    <div class="tagging-print-size">
                        <?php require_once 'taggings/index-cool-landscape.php'?> <!-- THIS IS THE COOL TAGGING LANDSCAPE -->
                        
                    </div> 
                </div>
                <div class="page-container">

                <?php
                    $stmt = $conn->prepare("SELECT * FROM `cool_Tag`");  
                    $stmt->execute();
                    $totalrecord = $stmt->get_result();

                    $total_rows = $totalrecord->num_rows;

                    $total_page_user = ceil($total_rows/$num_per_page);
    
                                
                    if($page_user > 1){
                        echo "<a class='pageStyle' href='coolLandScape.php?page_user=".($page_user - 1)."'>Prev</a>";
                        }

                        for($i = 1; $i < $total_page_user; $i++){
                                echo "<a class='pageStyle' href='coolLandScape.php?page_user=".$i."'>$i</a>";
                        }

                        if($i > $page_user){
                            echo "<a class='pageStyle' href='coolLandScape.php?page_user=".($page_user + 1)."'>Next</a>";
                        }
                ?>





            </div>
        </div>
        <script src='js/main.js'></script>
        <!-- <script src='js/drogDropt.js'></script>
         -->
       
        
   


</body>
</html>