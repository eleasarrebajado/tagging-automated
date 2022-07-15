<?php

$userPass = substr(str_shuffle("12345678910abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@*"),0,12);
$userPass2 = substr(str_shuffle("12345678910abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@*"),0,12); 

?>
<form method="POST" action="process/process.php" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $id; ?>"><!-- this is the update id hidden -->
            <div id="drp1" class="form-inputFiled">
                <span class="btnClose">×</span>
                <div  class="form-inputFiled_box">
                    <span class="form-inputFiled_box--tittle">
                        <h4>ADMINISTRATOR</h4><br>
                        <p>Please check all the details if it's correct or not before<br>Submmiting.</p>
                    </span>
                    <hr style="margin-top: 1rem; width: 100%; margin: 0 auto;">
                    <div class="form-inputFiled_box--drp">

                        <div class="form-input-box">
                            <label>USER ACCOUNT:</label>
                            <input type="text" title="Please Enter your User Name like eleasar" name="userAccount" placeholder="Enter your User Name" value="<?php echo $userAccountadmin ?>">
                            <label>POSITION:</label>
                            <input type="text" title="Please Enter your Position like I.T Staff" name="position" placeholder="Enter your position" value="<?php echo $position; ?>">
                            <label>USER NAME:</label>
                            <input type="text" title="Please Enter your User Name like Eleasar Rebajado" name="username" placeholder="Enter your User Name" value="<?php echo $userName; ?>">

                            <div class="form-input-box__btn">
                                <?php if($update == true): ?>
                                    <input type="submit" name="update" value="UPDATE">
                                    
                                <label class="custom-file-upload">
                                    <input type="file" name="file"/>
                                    <i class="fa-solid fa-file-arrow-up"></i> Upload Profile
                                </label>
                                <?php else: ?>
                                    <input type="submit" name="submit" value="SUBMIT">
                                    
                                <label class="custom-file-upload">
                                    <input type="file" name="file"/>
                                    <i class="fa-solid fa-file-arrow-up"></i> Upload Profile
                                </label>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-input-box">
                            <label>PASSWORD:</label>
                            <input type="text"  name="userPassword" value="<?php echo $userPass; ?>">
                            <label>EMAIL ADDRESS:</label>
                            <input type="text" title="Please Enter your Email Address like langityuta549@gmail.com"  name="emailaddress" placeholder="Enter your Emaill Address" value="<?php echo $emailAddress; ?>">
                        </div>

                    </div>
                </div>
            </div>
</form>        

<!-- THIS IS ANOTHER FUNCTION FOR ADMIN LOGIN -->

<form method="POST" action="process/process.php" enctype="multipart/form-data">
<input type="hidden" name="id_user" value="<?php echo $id_user; ?>"><!-- this is the update id hidden -->
    <div id="drp2" class="form-inputFiled">
        <span id="btnCloseUser" class="btnClose">×</span>
            <div id="inputfiledUser" class="form-inputFiled_box">
                <span class="form-inputFiled_box--tittle">
                    <h4>USERS</h4><br>
                    <p>Please check all the details if it's correct or not before<br>Submmiting.</p>
                </span>
                <hr style="margin-top: 1rem; width: 100%; margin: 0 auto;">
                <div class="form-inputFiled_box--drp">
                    <div class="form-input-box">
                        <label>USERS ACCOUNT:</label>
                        <input type="text" title="Please Enter your User Name like Eleasar Rebajado" name="useraccount" placeholder="user account 2" value="<?php echo $userName_user; ?>" >
                        <label>POSITION:</label>
                            <input type="text" title="Please Enter your Position like Merchandiser"  name="position" placeholder="Enter your position"  value="<?php echo $position_user; ?>">
                            <label>USER NAME:</label>
                            <input type="text" title="Please Enter your Name like eleasar" name="usersname" placeholder="Enter your User Name" value="<?php echo $name_user; ?>">

                        <div class="form-input-box__btn">
                                <?php if($update_user == true): ?>
                                    <input type="submit" name="update_user" value="UPDATE">
                                    
                                <label class="custom-file-upload">
                                    <input type="file" name="file"/>
                                    <i class="fa-solid fa-file-arrow-up"></i> Upload Profile
                                </label>
                                <?php else: ?>
                                    <input type="submit" name="usersubmit" value="SUBMIT">
                                    
                                <label class="custom-file-upload">
                                    <input type="file" name="file"/>
                                    <i class="fa-solid fa-file-arrow-up"></i> Upload Profile
                                </label>
                                <?php endif; ?>
                            </div>

                        </div>
                        <div class="form-input-box">
                            <label>PASSWORD:</label>
                            <input type="text" name="userpassword" value="<?php echo $userPass; ?>" placeholder="userpassword ?">
                            <label>EMAIL ADDRESS:</label>
                            <input type="text" title="Please Enter your Emaill Address like langityuta549@gmail.com" name="useremailadd" placeholder="Enter your Emaill Address" value="<?php echo $emailAddress_user; ?>">
                        </div>
                    </div>
                    
                </div>
            </div>
</form>