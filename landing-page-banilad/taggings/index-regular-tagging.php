
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

        .tag-header{
            max-width: 100%;
            height: 0.5in;
            padding: 0 0.3rem;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--black);
            box-sizing: border-box;
        }

        .tag-header p{
            color: white;
            font-weight: bold;
            font-size: 1.7rem;
        }

        .price-div2{
            max-width: 100%;
            letter-spacing: 0.1rem;
            height: auto;
            /* height: 4.5rem; */
            padding: 3px 12px;
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .price-div2 img{
            width: 2rem;
            height: auto;
            margin-right: 0.3rem;
        }

        .price-div2 p{
            font-size: 2.8rem;
            font-weight: bold;
        }

        .footer-container2{
            width: 100%;
            height: 0.4in;
            padding: 0 8px;
            display: flex;
            align-items: flex-end;
            bottom: 0.2rem;
            position: absolute;
            box-sizing: border-box;
        }

        .footer-container2 ul{
            color: white;
            box-sizing: border-box;
            list-style-type: none;
        }

        .footer-container2 ul li{
            font-size: 0.6rem;
            margin: 2px 0;
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

    $stmt = $conn->prepare("SELECT * FROM `reg_Tag` ORDER BY reg_id DESC limit $start_from, $num_per_page");
    $stmt->execute();
    $result = $stmt->get_result();
    while($row = $result->fetch_array()):
?>







    <div class="reg_landscape">
        <div class="tag-wrapper" id="ball">
            <div class="tag-wrapper__container">
                <div class="tag-header">
                    <p><?php echo $row['reg_brand_name']; ?></p>
                </div>
                <div class="price-div2">
                    <img src="images/peso-sign.png"><p style="font-family: impact;"><?php echo number_format((int)$row['reg_price']); ?><sup style="font-size: 1.8rem; font-family: impact;"><?php echo substr($row['reg_price'], -3); ?></sup></p>
                </div>
                
                <div class="footer-container2">
                    <ul>
                        <li><?php echo $row['reg_descript']; ?></li>
                        <li style="font-weight: bold; font-size: 0.7rem;"><span>An:</span><?php echo $row['reg_article']; ?></li>
                    </ul>
                </div>
            </div>
            <a href="regLandscape.php?del_reg=<?php echo $row['reg_id']; ?>">delete</a>
        </div>
    </div>

<?php endwhile; ?>




</body>
</html>