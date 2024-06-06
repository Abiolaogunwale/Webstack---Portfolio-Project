<!-- create_tables.php -->
<?php
require 'db.php';

$query = "DROP TABLE IF EXISTS users";
mysqli_query($conn, $query);

$query = "DROP TABLE IF EXISTS ads";
mysqli_query($conn, $query);

$query = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    username VARCHAR(255) NOT NULL UNIQUE,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
)";

if (mysqli_query($conn, $query)) {
    echo "Users table created successfully. ";
} else {
    echo "Error creating users table: " . mysqli_error($conn);
}

$query = "CREATE TABLE IF NOT EXISTS ads (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    name VARCHAR(255) NOT NULL,
    breed VARCHAR(255) NOT NULL,
    age INT NOT NULL,
    sex VARCHAR(10) NOT NULL,
    location VARCHAR(255) NOT NULL,
    purpose VARCHAR(50) NOT NULL,
    contact VARCHAR(255) NOT NULL,
    image VARCHAR(255) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
)";

if (mysqli_query($conn, $query)) {
    echo "Ads table created successfully.";
} else {
    echo "Error creating ads table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

