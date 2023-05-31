<?php
session_start();

if (!isset($_SESSION['email'])) {
    // User not authenticated, redirect to login page
    header('Location: login.html');
    exit();
}

// Check the user's role for authorization
$role = $_SESSION['role'];
if ($role !== 'admin') {
    // User does not have permission, redirect to an unauthorized page
    header('Location: unauthorized.html');
    exit();
}

// Display the protected content of the manage users page
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Users</title>
</head>
<body>
    <h1>Manage Users</h1>
    <p>Only administrators can access this page.</p>
    <!-- User management functionality goes here -->
    <a href="logout.php">Logout</a>
</body>
</html>
