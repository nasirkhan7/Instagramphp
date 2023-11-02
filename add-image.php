<?php
session_start();
include './config.php';


// Get the image
$fileName = $_FILES['image']['name'];
$tempName = $_FILES['image']['tmp_name'];

// Store the image in the local storage
move_uploaded_file($tempName, './Assets/' . $fileName);

// Send the data to the database
$insert = "INSERT INTO profile(username, name, bio,image) VALUES ('$username', '$name', '$bio','$fileName')";

// Execute the query

 $result = mysqli_query($connection, $insert);

// Start a session to store your message
// $_SESSION['profile photo'] = 'Add profile photo';
// $_SESSION['add story'] = 'Add to Your Story';

// Return back
header("Location: {$hostname}/profile.php");
?>