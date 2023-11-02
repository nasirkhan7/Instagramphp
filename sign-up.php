<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php   include("boot_css.php");?>
    <title>Instagram</title>
    <style>
        .underscore1 {
            width: 140px;
            height: 3px;
            background-color: var(--bs-gray-300);

        }

        .underscore2 {
            width: 140px;
            height: 3px;
            background-color: var(--bs-gray-300);
        }

        input {
            width: 80%;
            margin: 0.2rem 0 0.2rem 10%;
            border: 1px solid lightgray;
            padding: 0.5rem;
        }

        ::placeholder {
            color: gray;
        }

        input {
            outline-width: 0;
            border-radius: 2px;
            background-color: #FAFAFA;

        }

        input:focus {
            box-shadow: 2px 2px 10px 2px lightgray;
        }

        h6 {
            color: gray;
            font-weight: normal;
            text-align: center;
            width: 90%;
            margin: 20px auto;
        }

        a {
            text-decoration: none;
        }
    </style>

</head>

<body>


    <?php include './config.php';
        if(isset($_SESSION['added'])) {
            echo"
            <div class='flash p-3 bg-dark text-light position-fixed' style='top:0;right:0'>
                {$_SESSION['added']}
            </div>
            ";
        }
    ?>
    <div class="container col-lg-6 my-3 w-50 text-center border border-1 p-3">
            <img style=" cursor: pointer;" class="p-3 ms-5 mb-3 text-align-center" width="50%"
                src="./Assets/5a4e432a2da5ad73df7efe7a.png" alt="">
            <h6>Sign up to see photos and videos from your friends.</h6>
            <button class="btn btn-info w-50">
                <div class="row text-center">
                    <div class="col-2">
                        <img style=" cursor: pointer;" width="15px"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Facebook_icon_2013.svg/640px-Facebook_icon_2013.svg.png"
                            alt="">
                    </div>
                    <div class="col-10">
                        <p class="text-white">
                            Log in with Facebook
                        </p>
                    </div>
                </div>
            </button>
            <div class="row  p-2">
                <div class="col-5">
                    <div class="underscore1 mt-4">
                    </div>
                </div>
                <div class="col-2">
                    <h6 class="text-secondary mt-3 text-center">OR</h6>
                </div>
                <div class="col-5">
                    <div class="underscore2 mt-4">
                    </div>
                </div>
            </div>
            <form action="./signup.php" method="POST">
                <input class="form-control" type="email" name="email" placeholder="Email">
                <input class="form-control" type="text" name="name" placeholder="Full Name">
                <input class="form-control" type="text" name="username" placeholder="Username">
                <input class="form-control" type="password" name="password" placeholder="Password">

                <h6 class="mt-5">
                    People who use our service may have uploaded your contact information to Instagram.<a
                        href="https://web.facebook.com/help/instagram/261704639352628?_rdc=1&_rdr">Learn More</a></h6>
                <h6 class="mb-2">By signing up, you agree to our <a
                        href="https://help.instagram.com/581066165581870/?locale=en_US">Terms</a> , <a
                        href="https://www.facebook.com/privacy/policy">Privacy Policy</a> and <a
                        href="https://privacycenter.instagram.com/policies/cookies/">Cookies Policy</a> .</h6>
                <button class="btn btn-info text-white border rounded w-50">
                    Sign up
                </button>
            </form>
        </div>
    
    <div class="container my-3 w-50 border border-1 p-2">
        <h6>Have an account?<a href="https://web.facebook.com/help/instagram/261704639352628?_rdc=1&_rdr"> Log
                in</a>
        </h6>
    </div>
    <div class="container">
        <h6>Get the app.</h6>
        <div class="row">
            <div class="col-6">
                <a href="">
                    <img width="150px" src="https://static.cdninstagram.com/rsrc.php/v3/yz/r/c5Rp7Ym-Klz.png"
                        alt=""></a>
            </div>
            <div class="col-6">
                <a href="">
                    <img width="130px" src="https://static.cdninstagram.com/rsrc.php/v3/yu/r/EHY6QnZYdNX.png" alt="">
                </a>
            </div>
        </div>
    </div>

    <?php   include 'footer.php';

include("boot_js.php");
session_unset();
?>
    <script>
        let flash = document.querySelector('.flash');
        setTimeout(() => {
            flash.style.transform = 'translateX(100%)';
            flash.style.transition = 'all 0.6s';
        }, 2000);
    </script>

</body>
</html>