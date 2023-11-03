<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <?php include 'boot_css.php'?>
    <style>
        .pro {
            border-radius: 50%;
            box-sizing: border-box;
            height: 100%;
            margin: 0 auto;
            position: relative;
            width: 100%;
        }

        .btn {
            border: 0;
            cursor: pointer;
            height: 100%;
            padding: 0;
            width: 100%;

        }

        .profile {

            border: 0;
            left: 0;
            margin: 0;
            padding: 0;
            position: absolute;
            top: 0;
            vertical-align: baseline;
        }

        .image {
            display: none !important;
        }

        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 1;
        }

        .dialogbox {
            margin-left: auto;
            margin-right: auto;
            padding: 20px;
            border-radius: 15px;
            display: none;
            z-index: 999;
            width: 300px;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            background: white;
        }

        .dialogbox1 {
            margin-left: auto;
            margin-right: auto;
            padding: 20px;
            border-radius: 15px;
            display: none;
            z-index: 999;
            width: 450px;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            background: white;
        }

        .dialogbox2 {
            margin-left: auto;
            margin-right: auto;
            padding: 20px;
            border-radius: 15px;
            display: none;
            z-index: 999;
            width: 450px;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            background: white;
        }

        .line {
            writing-mode: vertical-rl;
            margin-left: 50px;
            height: 80%;
        }

        .pro-img {
            font-size: 8rem;
        }

        .ab {
            font-size: 4rem;
        }
    </style>


</head>

<body>
    <?php include './config.php'?>

    <header>
        <div class="container shadow">
            <div class="row">
                <div class="col-4 my-3">
                    <div class="div">
                        <div class="pro">
                            <button class="btn" title="change profile photo">
                                <i class="pro-img bi bi-person-square p-2"></i>
                            </button>
                            <div class="form">
                                <form action="./profile.php" method="POST" enctype="multipart/form-data">
                                    <input accept="image/jpeg,image/png" type="file" style="display:none;"
                                        class="fileInput" name="image">
                                </form>
                            </div>
                            <div class="overlay">
                                <div class="dialogbox text-center">
                                    <h5>change profile photo</h5>
                                    <hr>
                                    <a style="text-decoration: none; cursor:pointer"
                                        class="upload fw-3 text-primary">upload photo</a>
                                    <hr>
                                    <a id="removePhoto" class="text-danger"
                                        style="text-decoration: none; cursor:pointer">Remove Existing Photo</a>
                                    <hr>
                                    <a style="text-decoration: none; cursor:pointer" class="cancel">cancel</a>
                                </div>
                                <div class="dialogbox1 text-center">
                                    <h5>About your account</h5>
                                    <hr>
                                    <i class="ab bi bi-person-square"></i>
                                    <p>To maintain the integrity of our community, we're showing account information on
                                        Instagram. People can see this information by tapping ••• on your profile and
                                        selecting 'About this account'. <a href="" style="text-decoration: none;">See
                                            why this information is important.</a></p>
                                    <div class="cal d-flex">
                                        <i class="bi bi-calendar3 p-1"></i>
                                        <div class="join">
                                            <p>date of joining</p>
                                            <p>July 2017</p>
                                        </div>
                                    </div>
                                    <div class="pre d-flex">
                                        <i class="bi bi-person-fill p-1"></i>
                                        <button class="previous bg-white border-0 rounded"
                                            style="font-family: sans-serif;">previous username</button>
                                    </div>
                                    <hr>
                                    <button class="Stop bg-white border-0 rounded" style="font-family: sans-serif;">Stop
                                        it</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-8 my-3">
                    <div class="user my-2">
                        <div class="row">
                            <div class="col-3">
                                <button class="username bg-light border-0 rounded"
                                    style="font-family: sans-serif;">username</button>
                            </div>
                            <div class="col-3">
                                <button class="bg-light border-0 rounded" style="font-family: sans-serif;">Edit
                                    Profile</button>
                            </div>
                            <div class="col-3">
                                <button class="bg-light border-0 rounded" style="font-family: sans-serif;">view
                                    archive</button>
                            </div>
                            <div class="col-3">
                                <img width="20px" src="./Assets//search7780.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="count my-3">
                        <div class="row">
                            <div class="col-3 d-flex">
                                <div class="num">89</div>
                                <div class="col-12">posts</div>
                            </div>
                            <div class="col-5 d-flex">
                                <div class="col-2 color-dark">
                                    <a href="" style="text-decoration: none;">333</a>
                                </div>
                                <div class="col-10">
                                    <a style="text-decoration: none;" href="">follower</a>
                                </div>
                            </div>
                            <div class="col-4 d-flex">
                                <div class="col-2">
                                    <a style="text-decoration:none" class="">777</a>
                                    <a style="text-decoration:none" class="col-12">following</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="name">
                        <h3>Nasir</h3>
                    </div>
                    <div class="bio">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam fuga distinctio soluta hic
                            adipisci quod?</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="dialogbox2">
        <h5>previous username</h5>
        <hr>
        <p>How often an account's username changes can help you understand whether an account is authentic or
            fraudulent.</p>
        <h6>niazi.7147 has changed his username 3 times.</h6>
        <hr>
        <button class="Stop bg-white border-0 rounded" style="font-family: sans-serif;">Stop it</button>
    </div>
    <section class="main">
        <div class="container mt-5 shadow">
            <div class="row mt-4">
                <div class="record d-flex text-center">
                    <div class="col-3">
                        <div class="pos d-flex">
                            <i class="bi bi-grid-3x3 p-2"></i>
                            <p class="my-2">POST</p>
                        </div>
                    </div>
                    <div class="col-3 d-flex">
                        <div class="pos d-flex">
                            <i class="bi bi-person-video2 p-2"></i>
                            <p class="my-2">REELS</p>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="pos d-flex">
                            <i class="bi bi-bookmark p-2"></i>
                            <p style="font-size: small;" class="my-2">POSTS YOU'VE SAVED</p>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="pos d-flex">
                            <i class="bi bi-person-square p-2"></i>
                            <p class="my-2">TAGGED</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cards my-3">
                <div class="row">
                    <div class="col-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio vero fuga aperiam ad impedit
                        aliquam nihil cupiditate officiis. Saepe possimus voluptas accusamus soluta assumenda atque illo
                        nam laboriosam ipsam vel?
                    </div>
                    <div class="col-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio vero fuga aperiam ad impedit
                        aliquam nihil cupiditate officiis. Saepe possimus voluptas accusamus soluta assumenda atque illo
                        nam laboriosam ipsam vel?
                    </div>
                    <div class="col-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio vero fuga aperiam ad impedit
                        aliquam nihil cupiditate officiis. Saepe possimus voluptas accusamus soluta assumenda atque illo
                        nam laboriosam ipsam vel?
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>





    <script>
        let btn = document.querySelector('.btn');
        let dialogbox = document.querySelector('.dialogbox');
        let uploadphoto = document.querySelector('.upload');
        let fileInput = document.querySelector('.fileInput');
        let changePhotoButton = document.getElementById("changePhotoButton");
        let removePhotoLink = document.getElementById("removePhoto");
        let cancelbtn = document.querySelector(".cancel");
        let overlay = document.querySelector(".overlay");
        let username = document.querySelector(".username");
        let dialogbox1 = document.querySelector('.dialogbox1');
        let previous = document.querySelector('.previous');
        btn.addEventListener("click", () => {
            overlay.style.display = "block";
        });
        btn.addEventListener("click", () => {
            if (dialogbox.style.display === "none" || dialogbox.style.display === "") {
                dialogbox.style.display = "block";
            } else {
                dialogbox.style.display = "none";
            }
        });
        overlay.addEventListener("click", () => {
            overlay.style.display = "none";
            dialogbox.style.display = "none";
        });
        uploadphoto.addEventListener("click", () => {
            fileInput.click();
        });
        fileInput.addEventListener("change", (e) => {
            const selectedFile = e.target.files[0];
            if (selectedFile) {
                alert("You selected a file: " + selectedFile.name);
            }
        });

        // Add a click event listener to the "Remove Existing Photo" link
        removePhotoLink.addEventListener("click", () => {
            // Check if the user confirms removal (you may want to show a confirmation dialog)
            const confirmRemoval = window.confirm("Are you sure you want to remove your existing photo?");

            if (confirmRemoval) {
                // Remove the existing photo by setting the src attribute to an empty string
                const profileImage = changePhotoButton.querySelector(".profile");
                profileImage.src = "";
                profileImage.alt = "No Profile Photo";

                // Hide the dialog box
                dialogBox.style.display = "none";
            }
        });

        cancelbtn.addEventListener("click", () => {
            dialogbox.style.display = "none"
        });
        username.addEventListener("click", () => {
            overlay.style.display = "block";
            dialogbox1.style.display = "block";
        });
        previous.addEventListener("click", () => {
            overlay.style.display = "block";
            dialogbox2.style.display = "block";
        });
    </script>

    <?php include'boot_js.php';
    ?>
    </script>
</body>

</html>