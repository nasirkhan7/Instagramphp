<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram</title>
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

        .dialogbox {
            margin-left: auto;
            margin-right: auto;
            padding-top: 30px;
            padding-bottom: 5px;
            padding-left: 5px;
            padding-right: 5px;
            border-radius: 15px;
            display: none;
            z-index: 222;
        }
    </style>


</head>

<body>
        <?php include './config.php'?>

    <header>
        <div class="row">
            <div class="div">
                <div class="pro">
                    <button class="btn" title="change profile photo">
                        <img class="profile rounded-circle" width="100px" src="./Assets//profile.png"
                            alt="Add profile photo">
                    </button>
                    <div class="form">
                        <form action="./add-image.php" method="POST" enctype="multipart/form-data">
                            <input accept="image/jpeg,image/png" type="file" style="display:none;" class="fileInput" name="image">
                        </form>
                    </div>
                    <div class="dialogbox w-25 shadow text-center">
                        <h5>change profile photo</h5>
                        <hr>
                        <a style="text-decoration: none; cursor:pointer" class="upload fw-3 text-primary">upload photo</a>
                        <hr>
                        <a id="removePhoto" class="text-danger" style="text-decoration: none; cursor:pointer">Remove Existing Photo</a>
                        <hr>
                        <a style="text-decoration: none; cursor:pointer" class="cancel">cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </header>














    <script>
        let btn = document.querySelector('.btn');
        let dialogbox = document.querySelector('.dialogbox');
        let uploadphoto = document.querySelector('.upload');
        let fileInput = document.querySelector('.fileInput');
        let changePhotoButton = document.getElementById("changePhotoButton");
        // let dialogBox = document.getElementById("dialogBox");
        let removePhotoLink = document.getElementById("removePhoto");
        let cancelbtn=document.querySelector(".cancel");

        btn.addEventListener("click", () => {
            if (dialogbox.style.display === "none" || dialogbox.style.display === "") {
                dialogbox.style.display = "block";
            } else {
                dialogbox.style.display = "none";
            }
        })
        uploadphoto.addEventListener("click",()=>{
            fileInput.click();
        })
        fileInput.addEventListener("change",(e)=>{
            const selectedFile=e.target.files[0];
            if(selectedFile){
                alert("You selected a file: " + selectedFile.name);
            }
        })

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

        cancelbtn.addEventListener("click",()=>{
            dialogbox.style.display="none"
        })
    </script>

    <?php include'boot_js.php';
    ?>
    </script>
</body>

</html>