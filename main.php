<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("boot_css.php");
    ?>
    <title>Instagram</title>
    <style>
        @media only screen and (max-width: 600px) {
            .left {
                position: fixed;
                bottom: 0;
                background-color: white;
                width: 100%;
                margin-left: -32px;
                justify-content: center;
                padding: 2rem 0;
            }
        }
    </style>
</head>

<body>

    <div class=" container left w-25 shadow">
        <ul style="list-style: none;" class="p-3 ">
            <li>
                <img src="./Assets//5a4e432a2da5ad73df7efe7a.png" width="50%" alt="" class="my-3">
            </li>
            <li class="d-flex">
                <i style="font-size: 2rem;" class="mt-3 bi bi-house-door"></i> </li>
                <div><p>home</p></div>
            <li>
                <i style="font-size: 2rem;" class="mt-3 bi bi-search"></i> </li>
            <li>
                <i style="font-size: 2rem;" class="mt-3 bi bi-compass"></i> </li>
            <li>
                <i style="font-size: 2rem;" class="mt-3 bi bi-person-video2"></i>
            </li>
            <li>
                <i style="font-size: 2rem;" class="mt-3 bi bi-messenger"></i>
            </li>
            <li>
                <i style="font-size: 2rem;" class="mt-3 bi bi-heart"></i> </li>
            <li>
                <i style="font-size: 2rem;" class="mt-3 bi bi-plus-square"></i> </li>
            <li>
                <i style="font-size: 2rem;" class="mt-3 bi bi-person"></i> </li>
        </ul>
        <ul class="mt-5 pt-5" style="list-style: none;">
            <li>
                <i style="font-size: 2rem;" class="mt-3 bi bi-threads"></i> </li>
            <li>
                <i style="font-size: 2rem;" class="mt-3 bi bi-list"></i> </li>
        </ul>


    </div>


        






    <?php include("boot_js.php");?>

</body>

</html>