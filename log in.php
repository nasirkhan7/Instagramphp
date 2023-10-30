<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php   include("boot_css.php");
    ?>
    <title>Instagram</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container front">
        <div class="row m-auto">
            <div class="col-lg-6 col-md-0 ">
                <div class='mobile '>
                    <div class='notch'>
                        <div class='camera'></div>
                        <div class='speaker'>
                            <div class='sensor '>
                            </div>
                            <div class='button'>
                                <div class='volums'>
                                    <div>
                                        <div class='power'>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-form col-lg-6 col-md-12 col-sm-12 w-50 border border-1 p-3">
                <form action="" class="">
                    <img style=" cursor: pointer;" class="p-3 ms-5 mb-3 text-align-center" width="50%"
                        src="./Assets/5a4e432a2da5ad73df7efe7a.png" alt="">
                    <input type="email" class="form-control bg-light pe-4 mb-2 rounded" name="" id=""
                        placeholder="Phone number,username,email">
                    <input type="password" class="form-control bg-light mb-3" name="" id="" placeholder="Password">
                    <button class="login border-0 rounded text-white w-100 p-1">Log in</button>
                    <div class="row w-100 p-2">
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
                    <div class="container mt-4 p-2 ">
                        <div class="row text-center">
                            <div class="col-2 m-auto">
                                <a href="https://www.facebook.com/">
                                    <img style=" cursor: pointer;" width="20px"
                                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Facebook_icon_2013.svg/640px-Facebook_icon_2013.svg.png"
                                        alt="">
                                </a>
                            </div>
                            <div class="col-10 m-auto ">
                                <a href="https://www.facebook.com/"
                                    style="color: #485F8F; cursor: pointer; text-decoration:none">
                                    Log in with Facebook
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="./forgotpage.php" class="forgot text-center ms-5 mt-4 text-decoration-none" style=" color: #485F8F;cursor: pointer;">Forgot
                        password?
                    </a>
                </form>
            </div>
        </div>
        <div class="account p-3 w-50 border border-1 ms-5 mt-5">
            <div class="row text-center">
                <div class="col-8">
                    <p>Don't have an account?</p>
                </div>
                <div class="col-4">
                    <a href="./signup.php">Sign up</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-12 p-4">
                <p class="text-center">Get the app</p>
                <div class="row ms-5">
                    <div class="col-6">
                        <a href="">
                            <img width="150px" src="https://static.cdninstagram.com/rsrc.php/v3/yz/r/c5Rp7Ym-Klz.png"
                                alt=""></a>
                    </div>
                    <div class="col-6">
                        <a href="">
                            <img width="130px" src="https://static.cdninstagram.com/rsrc.php/v3/yu/r/EHY6QnZYdNX.png"
                                alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php   include("boot_js.php");
?>
</body>

</html>