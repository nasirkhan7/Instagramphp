<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram</title>
    <link rel="shortcut icon" href="./Assets/insta.png" type="image/x-icon">
    <?php include 'boot_css.php';?>
    <style>
        body {
            background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
        }
    </style>
</head>

<body>
    <div class="setting">
        <img style="top:15px;right: 15px;position:fixed;" width="60px"
            src="https://cdn-icons-png.flaticon.com/512/126/126472.png" alt="">
    </div>

    <div class="container w-50">
        <div class="Items my-5 p-5 text-center align-items-center">
            <img width="10%" style="margin: auto;"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/2048px-Instagram_logo_2016.svg.png"
                alt="">
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a href="./log in.php" class="bg-light rounded-pill border-1 border border-primary text-center p-3"
                    style="margin:0 auto; text-decoration:none">
                    Log into another account
                </a>
            </div>
        </div>

        <div class="create text-center text-secondary" style="margin-top: 400px;">
            <a style="text-decoration: none; color:darkgray;" href="./sign-up.php">Create new account</p>

                <img width="100px" src="https://cdn.icon-icons.com/icons2/3398/PNG/512/meta_logo_icon_214665.png"
                    alt="">
                Meta
        </div>
    </div>
    <?php include'boot_js.php'
?>
</body>

</html>