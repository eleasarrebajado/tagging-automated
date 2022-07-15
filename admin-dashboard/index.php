
<?php
    require_once 'process/dB.php';
    require_once 'process/process.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main3.css">
    <script src="https://kit.fontawesome.com/b2fc4eafe2.js" crossorigin="anonymous"></script>
    <script>window.history.forward();</script>

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
               <div class="btnInput-1">ADMIN</div>
               <div class="btnInput-2">USERS</div>
               <a class="btnInput-2" href="../branches/index.php"><div>BRANCHES</div></a>
               <a href="process/logout.php">LOG OUT</a>
            </div>
        </div>
        
        <div class="container_main--right_box">

            <?php
            if(isset($_SESSION['message'])):?>

                <div id="notifiy_remove" style="font-family: MontserratFont1; text-align: center; padding: 20px 18px; color: white; background-color:<?php echo $_SESSION['msgbgstyle']; ?>;">
                    <?php echo $_SESSION['message']; ?>
                    <?php unset($_SESSION['message']); ?>
                </div>          

            <?php endif; ?>
            <button id="btnDrop-a" type="button">ADMINISTRATOR</button>
                <div id="tableDrp-a" class="table-hide">
            
                <!-- <label>ADMINISTRATOR</label> -->
                    <table>
                        <tr>
                            <th>Profile</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Email Address</th>
                            <th>User Name</th>
                            <th>Password</th>
                            <th style="color: black; text-align: center;">Action</th>
                            <!-- <th style="color: blue">Update</th> -->
                            <th>Date</th>
                        </tr>
<!-- =============================================== THIS IS THE PAGANITION DIVISION ========================================================================-->
                        <?php
                            if(isset($_GET['page'])){
                                $page = $_GET['page'];
                            } else {

                                $page = 1;
                            }

                            $num_per_page = 07;
                            $start_from = ($page-1)*07;

                            $stmt = $conn->prepare("SELECT * FROM `adminDashBoard` ORDER BY iD_admin_Dash DESC limit $start_from, $num_per_page");
                            $stmt->execute();
                            $result = $stmt->get_result();
                            while($row = $result->fetch_array()):
                        ?>
<!-- =============================================== THIS IS THE PAGANITION DIVISION ========================================================================-->
                        <tr>
                            <td><div class="table-img"><?php echo "<img src='images/uploadsImages/". $row['userProfile'] . "' style='width: 100%; height: auto; transform: scale(1.8,1.8);'>" ?></div></td>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['position']; ?></td>
                            <td><?php echo $row['emailaddress']; ?></td>
                            <td style="color: #ff5c00;"><?php echo $row['adminDash']; ?></td>
                            <td style="color: #ff5c00;"><?php echo $row['adminPass']; ?></td>
                            <td style="text-align: center;">
                                <a style="padding: 8px; background-color: #ff8383; border-radius: 0.3rem" href="index.php?delete=<?php echo $row['iD_admin_Dash']; ?>"><img src="images/trash-can.svg"></a>
                                <a style="padding: 8px; background-color: #ffa500; border-radius: 0.3rem" href="index.php?edit=<?php echo $row['iD_admin_Dash']; ?>"><img src="images/file-pen.svg"></a>
                            </td>
                            <td><?php echo $row['reg_date']; ?></td>
                        </tr>

                    <?php endwhile; ?>
 <!-- =============================================== THIS IS THE PAGANITION DIVISION ========================================================================-->           
                    </table>
                        <?php  
                            $stmt = $conn->prepare("SELECT * FROM adminDashBoard ");  
                            $stmt->execute();
                            $totalrecord = $stmt->get_result();

                            $total_rows = $totalrecord->num_rows;

                            $total_page = ceil($total_rows/$num_per_page);

                            if($page > 1){
                                echo "<a class='pageStyle' href='index.php?page=".($page-1)."'>Prev</a>";
                            }

                            for($i = 1; $i < $total_page; $i++){
                                echo "<a class='pageStyle' href='index.php?page=".$i."'>$i</a>";
                            }

                            if($i > $page){
                                echo "<a class='pageStyle' href='index.php?page=".($page+1)."'>Next</a>";
                            }
                                
                        ?>
                </div>
<!-- =============================================== THIS IS THE PAGANITION DIVISION ========================================================================-->
<!-- ======================================================================================= -->
<!-- THIS IS ANOTHER TABLE FOR USERS DIVISION  ============================================-->
<!-- ======================================================================================= -->

                <button id="btnDrop-b" type="button">USERS ACCOUNT</button>
                <div id="tableDrp-b" class="table-hide">
            
                <!-- <label>ADMINISTRATOR</label> -->
                <table>
                        <tr>
                            <th>Profile</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Email Address</th>
                            <th>User Name</th>
                            <th>Password</th>
                            <th style="color: black; text-align: center;">Action</th>
                            <!-- <th style="color: blue">Update</th> -->
                            <th>Date</th>
                        </tr>

                        <?php
                        if(isset($_GET['page_user'])){
                            $page_user = $_GET['page_user'];
                        } else {

                            $page_user = 1;
                        }

                        $num_per_page = 07;
                        $start_from = ($page_user-1)*07;
                        
                            $stmt = $conn->prepare("SELECT * FROM `userDashBoard` ORDER BY iD_users DESC limit $start_from, $num_per_page");
                            $stmt->execute();
                            $result = $stmt->get_result();
                            while($row = $result->fetch_array()):
                        ?>

                        <tr>
                            <td><div class="table-img"><?php echo "<img src='images/uploadsImages/". $row['userprofilePic'] . "' style='width: 100%; height: auto; transform: scale(1.8,1.8);'>" ?></div></td>
                            <td><?php echo $row['username_user']; ?></td>
                            <td><?php echo $row['position']; ?></td>
                            <td><?php echo $row['emailaddress']; ?></td>
                            <td style="color: #ff5c00;"><?php echo $row['useracc']; ?></td>
                            <td style="color: #ff5c00;"><?php echo $row['userpass']; ?></td>
                            <td style="text-align: center;">
                                <a style="padding: 8px; background-color: #ff8383; border-radius: 0.3rem" href="index.php?deleteuser=<?php echo $row['iD_users']; ?>"><img src="images/trash-can.svg"></a>
                                <a style="padding: 8px; background-color: #ffa500; border-radius: 0.3rem" href="index.php?edituser=<?php echo $row['iD_users']; ?>"><img src="images/file-pen.svg"></a>
                            </td>
                            <td><?php echo $row['reg_date']; ?></td>
                        </tr>

                    <?php endwhile; ?>
            
                    </table>

                    <?php  
                            $stmt = $conn->prepare("SELECT * FROM `userDashBoard`");  
                            $stmt->execute();
                            $totalrecord = $stmt->get_result();

                            $total_rows = $totalrecord->num_rows;

                            $total_page_user = ceil($total_rows/$num_per_page);
    
                                
                            if($page_user > 1){
                                echo "<a class='pageStyle' href='index.php?page_user=".($page_user - 1)."'>Prev</a>";
                            }

                            for($i = 1; $i < $total_page_user; $i++){
                                echo "<a class='pageStyle' href='index.php?page_user=".$i."'>$i</a>";
                            }

                            if($i > $page_user){
                                echo "<a class='pageStyle' href='index.php?page_user=".($page_user + 1)."'>Next</a>";
                            }
                                
                        ?>
                        
                </div>
            <?php require_once 'dashboard-drpdwn/admin-input-drpdwn.php';?> <!-- THIS IS THE DROP DOWN ADMIN-->
        </div>
        
        <script src="js/main.js"></script> <!-- THIS IS THE JAVASCRIPT FOR ANIMATION DROP DOWN -->
    </div>
    
</body>
</html>