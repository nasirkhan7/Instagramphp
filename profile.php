
<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram</title>
    <?php include 'boot_css.php' ?>
</head>

<body>
<?php 
    if(isset($_SESSION['profile photo'])){
        echo" 
        <div class='flash text-light p-3 bg-dark position-fixed' style='top:0;right:0'>
        {$_SESSION['profile photo']}

        </div>
        ";
    }
    if(isset($_SESSION['add story'])){
        echo" 
        <div class='flash text-light p-3 bg-dark position-fixed' style='top:0;right:0'>
        {$_SESSION['add story']}

        </div>
        ";
    }
    
    ?>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <form action="./add-image.php" enctype="multipart/form-data">
                    <input class="form-control my-4 p-2" type="file" name="image" id="">
                    <button>submit</button>
                </form>
                <!-- <img width="100px" src="./Assets//instagram+profile+user+icon-1320184028326496024.png" alt="">   -->
            </div>
            <div class="col-3 p-3 my-3">12 post</div>
            <div class="col-3 p-3 my-3">followers</div>
            <div class="col-3 p-3 my-3">following</div>
            <h6>
                Name
            </h6>
        </div>
    </div>



    <?php include'boot_js.php';
    session_unset();
    ?>
    <script>
        let flash = document.querySelector('.flash');
        setTimeout(() => {
            flash.style.transform = 'translateX(100%)';
            flash.style.transition = 'all 0.6s';

        },2000)
    </script>
</body>

</html>