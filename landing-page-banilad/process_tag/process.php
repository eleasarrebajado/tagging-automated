<?php

require_once 'db.php';
require_once 'function.php';
require_once 'deleteAll.php';



if(isset($_POST["regUpload"]))

    {         

        $allowed = array('csv');
        $filename = $_FILES["file"]["name"];
        $text = pathinfo($filename, PATHINFO_EXTENSION);
        if(!in_array($text, $allowed)){

            $_SESSION['message'] = "Please check if the Excel format of file is <span style='color: #fff259; font-weight: bold'> CSV </span> and it should not be  <span style='color: #fff259; font-weight: bold'> EMPTY </span> before uploading";
             $_SESSION['messagetype'] ="#dc3545;";
             $_SESSION['messagetype1'] = "white";
             header("location: ../index.php");
           
        } else {


        $is_uploading = $_FILES["file"]["error"];

        $can_pass = $is_uploading == 0 ? true : false;
        
        if($can_pass){
                
        $servername='localhost';
        $username='root';
        $pass='';
        $conn=mysqli_connect($servername,$username,$pass,"automatedTaggingDb");
        if(!$conn){
        die('Could not Connect My Sql:' .mysqli_error());
        }

        $file = $_FILES['file']['tmp_name'];
        $handle = fopen($file, "r");
        $c = 0;
        while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
                  {
        $reg_brand_name = $filesop[0];
        $reg_price = $filesop[1];
        $reg_descript = $filesop[2];
        $reg_article = $filesop[3];
        $sql = "insert into reg_Tag(reg_brand_name, reg_price, reg_descript, reg_article) values ('$reg_brand_name','$reg_price','$reg_descript','$reg_article')";
        $stmt = mysqli_prepare($conn,$sql);
        mysqli_stmt_execute($stmt);

       $c = $c + 1;
         }

          if($sql){
             $_SESSION['message'] = "Good Job All Tagging has been Uploaded Successfully ";
             $_SESSION['messagetype'] ="#0067b9";
             $_SESSION['messagetype1'] = "#ffffff";
             header("location: ../regLandscape.php?error=successUpload");
           } 
       else
       {
          echo "Sorry! Unable to impo.";
        }

    
    } else {
        header("location: ../regLandscape.php?error=uploadEmpty");
        $_SESSION['message'] = "Error Please  Select File to Upload";
        $_SESSION['messagetype'] ="#ff8585";
        $_SESSION['messagetype1'] ="white";
    }
}

}

if(isset($_GET['del_reg'])){
    $reg_id = $_GET['del_reg'];
    $stmt = $conn->prepare("DELETE FROM reg_Tag WHERE reg_id=?");
    $stmt->bind_param("i", $reg_id);
    $stmt->execute();

    if($stmt->affected_rows == 0){
        header("location: ../regLandscape.php?delete=Delete");
    }
}

// THIS IS ANOTHER REGULAR LANSCAPE DIVISION
// THIS IS ANOTHER REGULAR LANSCAPE DIVISION  
// THIS IS ANOTHER REGULAR LANSCAPE DIVISION 
// THIS IS ANOTHER REGULAR LANSCAPE DIVISION 
// THIS IS ANOTHER REGULAR LANSCAPE DIVISION 
// THIS IS ANOTHER REGULAR LANSCAPE DIVISION 
// THIS IS ANOTHER REGULAR LANSCAPE DIVISION 
// THIS IS ANOTHER REGULAR LANSCAPE DIVISION 


if(isset($_POST["regularPortrait"]))

    {         

        $allowed = array('csv');
        $filename = $_FILES["file2"]["name"];
        $text = pathinfo($filename, PATHINFO_EXTENSION);
        if(!in_array($text, $allowed)){

            $_SESSION['message'] = "Please check if the Excel format of file is <span style='color: #fff259; font-weight: bold'> CSV </span> and it should not be  <span style='color: #fff259; font-weight: bold'> EMPTY </span> before uploading";
             $_SESSION['messagetype'] ="#dc3545;";
             $_SESSION['messagetype1'] = "white";
             header("location: ../index.php");
           
        } else {


        $is_uploading = $_FILES["file2"]["error"];

        $can_pass = $is_uploading == 0 ? true : false;
        
        if($can_pass){
                
        $servername='localhost';
        $username='root';
        $pass='';
        $conn=mysqli_connect($servername,$username,$pass,"automatedTaggingDb");
        if(!$conn){
        die('Could not Connect My Sql:' .mysqli_error());
        }

        $file = $_FILES['file2']['tmp_name'];
        $handle = fopen($file, "r");
        $c = 0;
        while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
                  {
        $reg_brand_name2 = $filesop[0];
        $reg_price2 = $filesop[1];
        $reg_descript2 = $filesop[2];
        $reg_article2 = $filesop[3];
        $sql = "insert into reg_Tag_prt(reg_brand_name2, reg_price2, reg_descript2, reg_article2) values ('$reg_brand_name2','$reg_price2','$reg_descript2','$reg_article2')";
        $stmt = mysqli_prepare($conn,$sql);
        mysqli_stmt_execute($stmt);

       $c = $c + 1;
         }

          if($sql){
             $_SESSION['message'] = "Good Job All Tagging has been Uploaded Successfully ";
             $_SESSION['messagetype'] ="#0067b9";
             $_SESSION['messagetype1'] = "#ffffff";
             header("location: ../regPortrait.php?error=successUpload");
           } 
       else
       {
          echo "Sorry! Unable to impo.";
        }

    
    } else {
        header("location: ../regPortrait.php?error=uploadEmpty");
        $_SESSION['message'] = "Error Please  Select File to Upload";
        $_SESSION['messagetype'] ="#ff8585";
        $_SESSION['messagetype1'] ="white";
    }
}

}

if(isset($_GET['del_reg_prt'])){
    $reg_prt = $_GET['del_reg_prt'];
    $stmt = $conn->prepare("DELETE FROM reg_tag_prt WHERE reg_id2 = ?");
    $stmt->bind_param("i", $reg_prt);
    $stmt->execute();

    if($stmt->affected_rows == 0){
        header ("location: ../regPortrait.php?DeleteAll");
    }
}


// THIS IS ANOTHER COOL LANDSCAPE DIVISION
// THIS IS ANOTHER COOL LANDSCAPE DIVISION 
// THIS IS ANOTHER COOL LANDSCAPE DIVISION 
// THIS IS ANOTHER COOL LANDSCAPE DIVISION 
// THIS IS ANOTHER COOL LANDSCAPE DIVISION 
// THIS IS ANOTHER COOL LANDSCAPE DIVISION  


if(isset($_POST["coolLandscape"]))

    {         

        $allowed = array('csv');
        $filename = $_FILES["fileCool"]["name"];
        $text = pathinfo($filename, PATHINFO_EXTENSION);
        if(!in_array($text, $allowed)){

            $_SESSION['message'] = "Please check if the Excel format of file is <span style='color: #fff259; font-weight: bold'> CSV </span> and it should not be  <span style='color: #fff259; font-weight: bold'> EMPTY </span> before uploading";
            $_SESSION['messagetype'] ="#dc3545;";
            $_SESSION['messagetype1'] = "white";
             header("location: ../index.php");
           
        } else {


        $is_uploading = $_FILES["fileCool"]["error"];

        $can_pass = $is_uploading == 0 ? true : false;
        
        if($can_pass){
                
        $servername='localhost';
        $username='root';
        $pass='';
        $conn=mysqli_connect($servername,$username,$pass,"automatedTaggingDb");
        if(!$conn){
        die('Could not Connect My Sql:' .mysqli_error());
        }

        $file = $_FILES['fileCool']['tmp_name'];
        $handle = fopen($file, "r");
        $c = 0;
        while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
                  {
        $cool_brand_name = $filesop[0];
        $cool_price = $filesop[1];
        $cool_descript = $filesop[2];
        $cool_article = $filesop[3];
        $cool_tittle = $filesop[4];
        $cool_prdct_name = $filesop[5];
        $sql = "insert into cool_Tag(cool_brand_name, cool_price, cool_descript, cool_article, cool_tittle, cool_prdct_name) values ('$cool_brand_name','$cool_price','$cool_descript','$cool_article', '$cool_tittle', '$cool_prdct_name')";
        $stmt = mysqli_prepare($conn,$sql);
        mysqli_stmt_execute($stmt);

       $c = $c + 1;
         }

          if($sql){
             $_SESSION['message'] = "Good Job All Tagging has been Uploaded Successfully ";
             $_SESSION['messagetype'] ="#0067b9";
             $_SESSION['messagetype1'] = "#ffffff";
             header("location: ../coolLandScape.php?error=successUpload");
           } 
       else
       {
          echo "Sorry! Unable to impo.";
        }

    
    } else {
        header("location: ../index.php?error=uploadEmpty");
        $_SESSION['message'] = "Error Please  Select File to Upload";
        $_SESSION['messagetype'] ="#ff8585";
        $_SESSION['messagetype1'] ="white";
    }
}

}

if(isset($_GET['cool_del_lndscape'])){
    $id_cool_lndscpe = $_GET['cool_del_lndscape'];
    $stmt = $conn->prepare("DELETE FROM cool_tag WHERE cool_id=?");
    $stmt->bind_param("i", $id_cool_lndscpe);
    $stmt->execute();

    if($stmt->affected_rows == 0){
        header("location: ../coolLandScape.php?Delete");
    }
}

// THIS IS ANOTHER COOL PORTRAIT DIVISION
// THIS IS ANOTHER COOL PORTRAIT DIVISION  
// THIS IS ANOTHER COOL PORTRAIT DIVISION  
// THIS IS ANOTHER COOL PORTRAIT DIVISION  
// THIS IS ANOTHER COOL PORTRAIT DIVISION    


if(isset($_POST["coolPrt"]))

    {         

        $allowed = array('csv');
        $filename = $_FILES["fileCoolPrt"]["name"];
        $text = pathinfo($filename, PATHINFO_EXTENSION);
        if(!in_array($text, $allowed)){

            $_SESSION['message'] = "Please check if the Excel format of file is <span style='color: #fff259; font-weight: bold'> CSV </span> and it should not be  <span style='color: #fff259; font-weight: bold'> EMPTY </span> before uploading";
            $_SESSION['messagetype'] ="#dc3545;";
            $_SESSION['messagetype1'] = "white";
             header("location: ../coolPrt.php");
           
        } else {


        $is_uploading = $_FILES["fileCoolPrt"]["error"];

        $can_pass = $is_uploading == 0 ? true : false;
        
        if($can_pass){
                
        $servername='localhost';
        $username='root';
        $pass='';
        $conn=mysqli_connect($servername,$username,$pass,"automatedTaggingDb");
        if(!$conn){
        die('Could not Connect My Sql:' .mysqli_error());
        }

        $file = $_FILES['fileCoolPrt']['tmp_name'];
        $handle = fopen($file, "r");
        $c = 0;
        while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
                  {
        $cool_brand_name2 = $filesop[0];
        $cool_price2 = $filesop[1];
        $cool_descript2 = $filesop[2];
        $cool_article2 = $filesop[3];
        $cool_tittle2 = $filesop[4];
        $cool_prdct_name2 = $filesop[5];
        $sql = "insert into cool_Tag_prt(cool_brand_name2, cool_price2, cool_descript2, cool_article2, cool_tittle_prt, cool_prdct_name_prt) values ('$cool_brand_name2','$cool_price2','$cool_descript2','$cool_article2', '$cool_tittle2', '$cool_prdct_name2')";
        $stmt = mysqli_prepare($conn,$sql);
        mysqli_stmt_execute($stmt);

       $c = $c + 1;
         }

          if($sql){
             $_SESSION['message'] = "Good Job All Tagging has been Uploaded Successfully ";
             $_SESSION['messagetype'] ="#0067b9";
             $_SESSION['messagetype1'] = "#ffffff";
             header("location: ../coolPrt.php?error=successUpload");
           } 
       else
       {
          echo "Sorry! Unable to impo.";
        }

    
    } else {
        header("location: ../coolPrt.php?error=uploadEmpty");
        $_SESSION['message'] = "Error Please  Select File to Upload";
        $_SESSION['messagetype'] ="#ff8585";
        $_SESSION['messagetype1'] ="white";
    }
}

}

if(isset($_GET['cool_del_prt'])){
    $id_cool_prt = $_GET['cool_del_prt'];
    $stmt = $conn->prepare("DELETE FROM cool_tag_prt WHERE cool_id2 = ?");
    $stmt->bind_param("i", $id_cool_prt);
    $stmt->execute();

    if($stmt->affected_rows == 0){
        header("location: ../coolPrt.php?Delete");
    }
}

// THIS IS THE ROCA DIVISION ==============================================
// THIS IS THE ROCA DIVISION ==============================================
// THIS IS THE ROCA DIVISION ==============================================
// THIS IS THE ROCA DIVISION ==============================================
// THIS IS THE ROCA DIVISION ==============================================
// THIS IS THE ROCA DIVISION ==============================================
// THIS IS THE ROCA DIVISION ==============================================



if(isset($_POST["rocaPrt"]))

    {         

        $allowed = array('csv');
        $filename = $_FILES["fileRocaPrt"]["name"];
        $text = pathinfo($filename, PATHINFO_EXTENSION);
        if(!in_array($text, $allowed)){

            $_SESSION['message'] = "Please check if the Excel format of file is <span style='color: #fff259; font-weight: bold'> CSV </span> and it should not be  <span style='color: #fff259; font-weight: bold'> EMPTY </span> before uploading";
            $_SESSION['messagetype'] ="#dc3545;";
            $_SESSION['messagetype1'] = "white";
             header("location: ../rocaPrt.php");
           
        } else {


        $is_uploading = $_FILES["fileRocaPrt"]["error"];

        $can_pass = $is_uploading == 0 ? true : false;
        
        if($can_pass){
                
        $servername='localhost';
        $username='root';
        $pass='';
        $conn=mysqli_connect($servername,$username,$pass,"automatedTaggingDb");
        if(!$conn){
        die('Could not Connect My Sql:' .mysqli_error());
        }

        $file = $_FILES['fileRocaPrt']['tmp_name'];
        $handle = fopen($file, "r");
        $c = 0;
        while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
                  {
        $roca_brand_name = $filesop[0];
        $roca_price = $filesop[1];
        $roca_descript = $filesop[2];
        $roca_article = $filesop[3];
        $roca_tittle = $filesop[4];
        $roca_prdct_name = $filesop[5];
        $sql = "insert into roca_prt(roca_brand_name, roca_price, roca_descript, roca_article, roca_tittle_prt, roca_prdct_name_prt) values ('$roca_brand_name','$roca_price','$roca_descript','$roca_article', '$roca_tittle', '$roca_prdct_name')";
        $stmt = mysqli_prepare($conn,$sql);
        mysqli_stmt_execute($stmt);

       $c = $c + 1;
         }

          if($sql){
             $_SESSION['message'] = "Good Job All Tagging has been Uploaded Successfully ";
             $_SESSION['messagetype'] ="#0067b9";
             $_SESSION['messagetype1'] = "#ffffff";
             header("location: ../rocaPrt.php?error=successUpload");
           } 
       else
       {
          echo "Sorry! Unable to impo.";
        }

    
    } else {
        header("location: ../rocaPrt.php?error=uploadEmpty");
        $_SESSION['message'] = "Error Please  Select File to Upload";
        $_SESSION['messagetype'] ="#ff8585";
        $_SESSION['messagetype1'] ="white";
    }
}

}

if(isset($_GET['roca_del_prt'])){
    $id_roca_prt = $_GET['roca_del_prt'];
    $stmt = $conn->prepare("DELETE FROM roca_prt WHERE roca_id = ?");
    $stmt->bind_param("i", $id_roca_prt);
    $stmt->execute();

    if($stmt->affected_rows == 0){
        header("location: ../rocaPrt.php?Delete");
    }
}

// THIS IS THE BUILD DIVISION PORTRAIT ============================================================
// THIS IS THE BUILD DIVISION PORTRAIT ============================================================
// THIS IS THE BUILD DIVISION PORTRAIT ============================================================
// THIS IS THE BUILD DIVISION PORTRAIT ============================================================



if(isset($_POST["buildPrt"]))

    {         

        $allowed = array('csv');
        $filename = $_FILES["fileBuild"]["name"];
        $text = pathinfo($filename, PATHINFO_EXTENSION);
        if(!in_array($text, $allowed)){

            $_SESSION['message'] = "Please check if the Excel format of file is <span style='color: #fff259; font-weight: bold'> CSV </span> and it should not be  <span style='color: #fff259; font-weight: bold'> EMPTY </span> before uploading";
            $_SESSION['messagetype'] ="#dc3545;";
            $_SESSION['messagetype1'] = "white";
             header("location: ../rocaPrt.php");
           
        } else {


        $is_uploading = $_FILES["fileBuild"]["error"];

        $can_pass = $is_uploading == 0 ? true : false;
        
        if($can_pass){
                
        $servername='localhost';
        $username='root';
        $pass='';
        $conn=mysqli_connect($servername,$username,$pass,"automatedTaggingDb");
        if(!$conn){
        die('Could not Connect My Sql:' .mysqli_error());
        }

        $file = $_FILES['fileBuild']['tmp_name'];
        $handle = fopen($file, "r");
        $c = 0;
        while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
                  {
        $build_brand_name = $filesop[0];
        $build_price = $filesop[1];
        $build_descript = $filesop[2];
        $build_article = $filesop[3];
        $build_article = $filesop[4];
        $build_prdct_name = $filesop[5];
        $sql = "insert into build_prt(build_brand_name, build_price, build_descript, build_article, build_tittle_prt, build_prdct_name_prt) values ('$build_brand_name', '$build_price', '$build_descript', '$build_article', '$build_tittle', '$build_prdct_name')";
        $stmt = mysqli_prepare($conn,$sql);
        mysqli_stmt_execute($stmt);

       $c = $c + 1;
         }

          if($sql){
             $_SESSION['message'] = "Good Job All Tagging has been Uploaded Successfully ";
             $_SESSION['messagetype'] ="#0067b9";
             $_SESSION['messagetype1'] = "#ffffff";
             header("location: ../buildPrt.php?error=successUpload");
           } 
       else
       {
          echo "Sorry! Unable to impo.";
        }

    
    } else {
        header("location: ../buildPrt.php?error=uploadEmpty");
        $_SESSION['message'] = "Error Please  Select File to Upload";
        $_SESSION['messagetype'] ="#ff8585";
        $_SESSION['messagetype1'] ="white";
    }
}

}

if(isset($_GET['build_delete_prt'])){
    $id_build_prt = $_GET['build_delete_prt'];
    $stmt = $conn->prepare("DELETE FROM build_prt WHERE build_id_prt = ?");
    $stmt->bind_param("i", $id_build_prt);
    $stmt->execute();

    if($stmt->affected_rows == 0){
        header("location: ../buildPrt.php?Delete");
    }
}


//THIS IS THE BUILD DIVISION LANDSCAPE =======================================================
//THIS IS THE BUILD DIVISION LANDSCAPE =======================================================
//THIS IS THE BUILD DIVISION LANDSCAPE =======================================================
//THIS IS THE BUILD DIVISION LANDSCAPE =======================================================
//THIS IS THE BUILD DIVISION LANDSCAPE =======================================================




if(isset($_POST["buildLandscape"]))

    {         

        $allowed = array('csv');
        $filename = $_FILES["fileBuildLndscape"]["name"];
        $text = pathinfo($filename, PATHINFO_EXTENSION);
        if(!in_array($text, $allowed)){

            $_SESSION['message'] = "Please check if the Excel format of file is <span style='color: #fff259; font-weight: bold'> CSV </span> and it should not be  <span style='color: #fff259; font-weight: bold'> EMPTY </span> before uploading";
            $_SESSION['messagetype'] ="#dc3545;";
            $_SESSION['messagetype1'] = "white";
             header("location: ../buildLandscape.php");
           
        } else {


        $is_uploading = $_FILES["fileBuildLndscape"]["error"];

        $can_pass = $is_uploading == 0 ? true : false;
        
        if($can_pass){
                
        $servername='localhost';
        $username='root';
        $pass='';
        $conn=mysqli_connect($servername,$username,$pass,"automatedTaggingDb");
        if(!$conn){
        die('Could not Connect My Sql:' .mysqli_error());
        }

        $file = $_FILES['fileBuildLndscape']['tmp_name'];
        $handle = fopen($file, "r");
        $c = 0;
        while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
                  {
        $build_brand_name = $filesop[0];
        $build_price = $filesop[1];
        $build_descript = $filesop[2];
        $build_article = $filesop[3];
        $build_article = $filesop[4];
        $build_prdct_name = $filesop[5];
        $sql = "insert into build_lndscape(build_brand_name, build_price, build_descript, build_article, build_tittle, build_prdct_name) values ('$build_brand_name', '$build_price', '$build_descript', '$build_article', '$build_tittle', '$build_prdct_name')";
        $stmt = mysqli_prepare($conn,$sql);
        mysqli_stmt_execute($stmt);

       $c = $c + 1;
         }

          if($sql){
             $_SESSION['message'] = "Good Job All Tagging has been Uploaded Successfully ";
             $_SESSION['messagetype'] ="#0067b9";
             $_SESSION['messagetype1'] = "#ffffff";
             header("location: ../buildLandscape.php?error=successUpload");
           } 
       else
       {
          echo "Sorry! Unable to impo.";
        }

    
    } else {
        header("location: ../buildLandscape.php?error=uploadEmpty");
        $_SESSION['message'] = "Error Please  Select File to Upload";
        $_SESSION['messagetype'] ="#ff8585";
        $_SESSION['messagetype1'] ="white";
    }
}

}

if(isset($_GET['build_delete_lndscape'])){
    $id_build_prt = $_GET['build_delete_lndscape'];
    $stmt = $conn->prepare("DELETE FROM build_lndscape WHERE build_id_lndscape = ?");
    $stmt->bind_param("i", $id_build_prt);
    $stmt->execute();

    if($stmt->affected_rows == 0){
        header("location: ../buildLandscape.php?Delete");
    }
}
