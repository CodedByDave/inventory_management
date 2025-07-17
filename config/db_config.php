<?php

// Load environment variables (if using .env, otherwise set manually)
$dbHost = getenv('DB_HOST') ?: 'localhost';
$dbUser = getenv('DB_USER') ?: 'root';
$dbPass = getenv('DB_PASS') ?: '';
$dbName = getenv('DB_NAME') ?: 'enrollment_system';

// Error reporting (disable in production)
error_reporting(E_ALL);
ini_set('display_errors', '0'); // Hide errors from users
ini_set('log_errors', '1');     // Log errors to a file

try {
    // Create PDO connection with secure settings
    $db = new PDO(
        "mysql:host=$dbHost;dbname=$dbName;charset=utf8mb4",
        $dbUser,
        $dbPass,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,       
            PDO::ATTR_EMULATE_PREPARES => false,               
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,   
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci" 
        ]
    );
} catch (PDOException $e) {
    // Log error securely (do not expose details)
    error_log("Database connection failed: " . $e->getMessage());
    
    // Display a generic error message
    die("A database error occurred. Please try again later.");
}

// Prevent direct access to this file
if (basename($_SERVER['PHP_SELF']) === 'db_config.php') {
    die('Access denied.');
}
?>