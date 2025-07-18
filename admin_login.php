<?php
session_start();
require_once './config/db_config.php';

// Enable error reporting for debugging (remove in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Method not allowed');
}

// Get inputs from form
$adminNumber = filter_input(INPUT_POST, 'adminNumber', FILTER_SANITIZE_STRING);
$password = trim($_POST['password'] ?? '');

// Check if fields are filled
if (empty($adminNumber) || empty($password)) {
    $_SESSION['login_error'] = 'Please enter both admin number and password.';
    header('Location: admin_login_form.php');
    exit;
}

try {

    // Fetch admin with matching admin number
    $stmt = $db->prepare("SELECT id, admin_number, password, role FROM tbl_users WHERE admin_number = :adminNumber AND role = 'admin' LIMIT 1");
    $stmt->bindParam(':adminNumber', $adminNumber);
    $stmt->execute();
    $admin = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$admin) {
        $_SESSION['login_error'] = 'Invalid admin number or password.';
        header('Location: admin_login_form.php');
        exit;
    }

    // Debug output (remove in production)
    error_log("Stored hash: " . $admin['password']);
    error_log("Input password: " . $password);

    // If found and password is correct
    if ($admin && $password === $admin['password']) {
        $_SESSION['admin_id'] = $admin['id'];
        $_SESSION['admin_number'] = $admin['admin_number'];  
        $_SESSION['admin_role'] = $admin['role'];
        $_SESSION['logged_in'] = true;
        $_SESSION['login_success'] = 'Welcome back, admin ' . $_SESSION['admin_number'] . '!';

        header('Location: ./admin/admin_dashboard.php');
        exit;
    } else {
        $_SESSION['login_error'] = 'Invalid admin number or password.';
        header('Location: admin_login_form.php');
        exit;
    }

} catch (PDOException $e) {
    error_log("Admin login error: " . $e->getMessage());
    $_SESSION['login_error'] = 'System error. Please try again later.';
    header('Location: admin_login_form.php');
    exit;
}