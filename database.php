<?php

$hostName = "HOSTNAME";
$dbUser = "DATABASE_USER";
$dbPassword = "DATABASE_PASSWORD";
$dbName = "DATABASE_NAME";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

// Define and hash the admin key
$adminKey = password_hash("ADMIN_KEY", PASSWORD_DEFAULT); // Replace "your_admin_key" with your actual admin key

?>
