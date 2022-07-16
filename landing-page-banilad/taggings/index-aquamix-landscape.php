
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

        .tag-wrapper{
            width: 2.25in;
            height: auto;
        }

        .tag-wrapper a{
            padding: 0 0.3rem;
            text-decoration: none;
            color: white;
            margin-top: 1rem;
            background-color: #ff0000;
        }

        .tag-wrapper a:hover{
            background-color: #cf0000;
            transition: all 0.3s ease-in-out;
        }

        .tag-wrapper__container{
            width: 100%;
            height: 1.5in;
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

        .tag-header-reg{
            max-width: 100%;
            height: 0.5in;
            padding: 0 0.3rem;
            display: flex;
            align-items: center;
            background-color: #006200;
            box-sizing: border-box;
        }

        .tag-header-reg img{
            width: 58%;
            height: auto;
            margin: 0 auto;
        }

        .tag-header-reg p{
            color: white;
            font-weight: bold;
            font-size: 1.7rem;
        }

        .price-div-lnd{
            max-width: 100%;
            letter-spacing: 0.1rem;
            height: auto;
            /* height: 4.5rem; */
            padding: 3px 12px;
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .price-div-lnd img{
            width: 2rem;
            height: auto;
            margin-right: 0.3rem;
        }

        .price-div-lnd p{
            font-size: 2.8rem;
            font-weight: bold;
        }

        .footer-container-lnd{
            width: 100%;
            height: 0.4in;
            padding: 0 8px;
            display: flex;
            align-items: flex-end;
            bottom: 0.2rem;
            position: absolute;
            box-sizing: border-box;
        }

        .footer-container-lnd ul{
            color: white;
            box-sizing: border-box;
            list-style-type: none;
        }

        .footer-container-lnd ul li{
            font-size: 0.7rem;
            margin: 1px 0;
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

$num_per_page = 18;
$start_from = ($page_user-1)*07;

    $stmt = $conn->prepare("SELECT * FROM `aquamix_landscape` ORDER BY aquamix_id_landscape DESC limit $start_from, $num_per_page");
    $stmt->execute();
    $result = $stmt->get_result();
    while($row = $result->fetch_array()):
?>







    <div class="reg_landscape">
        <div class="tag-wrapper" id="ball">
            <div class="tag-wrapper__container">
                <div class="tag-header-reg">
                    <img src="images/aquamix-logo.png">
                </div>
                <div class="price-div-lnd">
                    <img src="images/peso-sign.png"><p style="font-family: impact;"><?php echo number_format((int)$row['aquamix_price']); ?><sup style="font-size: 1.8rem; font-family: impact;"><?php echo substr($row['aquamix_price'], -3); ?></sup></p>
                </div>
                
                <div class="footer-container-lnd">
                    <ul>
                        <li><b><?php echo $row['aquamix_prdct_name']; ?></b></li>
                        <li><?php echo $row['aquamix_descript']; ?></li>
                        <li style="font-weight: bold; font-size: 0.7rem;"><span>An:</span><?php echo $row['aquamix_article']; ?></li>
                    </ul>
                </div>
            </div>
            <a href="aquamixLndscape.php?aquamix_delete_lndscape=<?php echo $row['aquamix_id_landscape']; ?>">delete</a>
        </div>
    </div>

<?php endwhile; ?>


</body>
</html>