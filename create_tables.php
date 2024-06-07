<!-- create_tables.php -->
<?php
require 'db.php';

// Drop existing tables
$query = "DROP TABLE IF EXISTS users";
mysqli_query($conn, $query);

$query = "DROP TABLE IF EXISTS ads";
mysqli_query($conn, $query);

$query = "DROP TABLE IF EXISTS contacts";
mysqli_query($conn, $query);

$query = "DROP TABLE IF EXISTS lp_submissions";
mysqli_query($conn, $query);

// Create users table
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

// Create ads table
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
    echo "Ads table created successfully. ";
} else {
    echo "Error creating ads table: " . mysqli_error($conn);
}

// Create contacts table
$query = "CREATE TABLE IF NOT EXISTS contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    phone VARCHAR(15),
    message TEXT,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $query)) {
    echo "Contacts table created successfully. ";
} else {
    echo "Error creating contacts table: " . mysqli_error($conn);
}

// Create lp_submissions table
$query = "CREATE TABLE IF NOT EXISTS lp_submissions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $query)) {
    echo "LP Submissions table created successfully.";
} else {
    echo "Error creating LP Submissions table: " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
?>


