<!-- delete_ad.php -->
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login_signup.php");
    exit();
}

require 'db.php';
$id = $_POST['id'];
$user_id = $_SESSION['user_id'];

// Ensure the ad belongs to the user
$query = "SELECT * FROM ads WHERE id='$id' AND user_id='$user_id'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    $query = "DELETE FROM ads WHERE id='$id'";
    if (mysqli_query($conn, $query)) {
        header("Location: profile.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "Unauthorized action.";
}
?>
