<?php
    session_start();
    include './config.php';
    $email = $_POST['email'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    //send the data to the database
    $insert= "INSERT INTO signup(email,name,username,password) VALUES('$email','$name','$username','$password')";
    $result = mysqli_query($connection, $insert);
    //start a seesion to store your message
    $_SESSION["added"] = "Signup successgully!!";
    // return back
    header("Location: {$hostname}/main.php");


?>