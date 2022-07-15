
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    :root{
        --red: red;
        --black: black;
    }

        .tag-wrapper-prt{
            width: 2in;
            height: 3.1in;
            margin-top: 0.4rem;
        }

        .tag-wrapper-prt a{
            padding: 0 0.3rem;
            text-decoration: none;
            color: white;
            margin-top: 1rem;
            background-color: #ff0000;
        }

        .tag-wrapper-prt a:hover{
            background-color: #cf0000;
            transition: all 0.3s ease-in-out;
        }

        .tag-wrapper-prt__container{
            width: 100%;
            height: 3in;
            border-style: dashed;
            border-width: 0.5px;
            border-color: gray;
            box-sizing: border-box;
            position: relative;
        }

        .reg_landscape{
            float: left;

            
        }

        

        input[type=submit]:hover{
            background-color: #db0000;
        }

        .tag-header{
            max-width: 100%;
            height: 0.8in;
            padding: 0 0.3rem;
            display: flex;
            align-items: center;
            background-color: black;
            box-sizing: border-box;
        }

        .tag-header img{
            width: 48%;
            height: auto;
            margin: 0 auto;
        }

        .tag-header p{
            color: white;
            font-weight: bold;
            font-size: 1.7rem;
        }

        .price-div{
            max-width: 100%;
            height: 200px;
            background-color: 
            letter-spacing: 0.1rem;
            height: 9.5rem;
            padding: 3px 12px;
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .price-wrapper{
            width: 100%;
        }

        .price-div img{
            width: 2rem;
            height: auto;
            margin-right: 0.3rem;
        }

        .price-div p{
            font-size: 2.3rem;
            font-weight: bold;
        }

        .footer-container{
            width: 100%;
            height: 0.4in;
            padding: 0 8px;
            display: flex;
            align-items: flex-end;
            bottom: 0.2rem;
            position: absolute;
            box-sizing: border-box;
        }

        .footer-container ul{
            color: white;
            box-sizing: border-box;
            list-style-type: none;
        }

        .footer-container ul li:first-child{
            text-align: center;
            margin-bottom: 2rem;
            font-weight: bold;
            font-size: 0.8rem;
        }

        .footer-container ul li{
            font-size: 0.7rem;
            margin: 5px 0;
            color: var(--black);
        }
    </style>
</head>
<body>

<?php 


if(isset($_GET['page_user'])){
    $page_user = $_GET['page_user'];
} else {

    $page_user = 1;
}

$num_per_page = 16;
$start_from = ($page_user-1)*07;

    $stmt = $conn->prepare("SELECT * FROM `build_prt` ORDER BY build_id_prt DESC limit $start_from, $num_per_page");
    $stmt->execute();
    $result = $stmt->get_result();
    while($row = $result->fetch_array()):
?>

    <div class="reg_landscape">
        <div class="tag-wrapper-prt" id="ball">
            <div class="tag-wrapper-prt__container">
                <div class="tag-header">
                    <img src="images/build.jpg">
                </div>
                <div class="price-wrapper">
                    <div class="price-div">
                        <img src="images/peso-sign.png"><p style="font-family: impact;"><?php echo number_format((int)$row['build_price']); ?><sup style="font-size: 1.8rem; font-family: impact;"><?php echo substr($row['build_price'], -3); ?></sup></p>
                    </div>
                </div>
                
                <div class="footer-container">
                    <ul>
                        <li style="font-size: 23px;"><?php echo $row['build_tittle_prt']; ?></li>
                        <li><?php echo $row['build_price']; ?></li>
                        <li style="font-weight: bold; font-size: 0.8rem;"><span>An:</span><?php echo $row['build_article']; ?></li>
                    </ul>
                </div>
            </div>
            <a href="buildPrt.php?build_delete_prt=<?php echo $row['build_id_prt']; ?>">delete</a>
        </div>
    </div>

<?php endwhile; ?>


</body>
</html>