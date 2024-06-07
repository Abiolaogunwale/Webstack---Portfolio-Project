<!-- save_ad.php -->
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login_signup.php");
    exit();
}

require 'db.php';
$user_id = $_SESSION['user_id'];
$name = $_POST['name'];
$breed = $_POST['breed'];
$age = $_POST['age'];
$sex = $_POST['sex'];
$location = $_POST['location'];
$purpose = $_POST['purpose'];
$contact = $_POST['contact'];
$image = $_FILES['image']['name'];
$target = "images/" . basename($image);

// Move uploaded image to the images folder
if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    $query = "INSERT INTO ads (user_id, name, breed, age, sex, location, purpose, contact, image) VALUES ('$user_id', '$name', '$breed', '$age', '$sex', '$location', '$purpose', '$contact', '$image')";
    if (mysqli_query($conn, $query)) {
        header("Location: profile.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "Failed to upload image.";
}
?>
