<?php
// logout.php

// Start the session
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the homepage or login page
header("Location: index.php"); // Change to login.php if you prefer
exit();
?>