<!-- signup.php -->
<?php
session_start();
require 'db.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$verify_password = $_POST['verify_password'];

if ($password !== $verify_password) {
    die("Passwords do not match.");
}

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$query = "INSERT INTO users (firstname, lastname, username, email, password) VALUES ('$firstname', '$lastname', '$username', '$email', '$hashed_password')";

if (mysqli_query($conn, $query)) {
    $_SESSION['user_id'] = mysqli_insert_id($conn);
    header("Location: ads.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
