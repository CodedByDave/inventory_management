<?php
session_start();
require_once './config/db_config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Method not allowed');
}

$studentNumber = filter_input(INPUT_POST, 'studentNumber', FILTER_SANITIZE_STRING);
$password = trim($_POST['password'] ?? '');

if (empty($studentNumber) || empty($password)) {
    $_SESSION['login_error'] = 'Please enter both student number and password';
    header('Location: login.php');
    exit;
}

try {
    $stmt = $db->prepare("SELECT student_id, student_number, first_name, last_name, password 
                         FROM tbl_students 
                         WHERE (student_number = :studentNumber)
                         AND enrollment_status = 'Enrolled'
                         LIMIT 1");
    $stmt->bindParam(':studentNumber', $studentNumber);
    $stmt->execute();
    $user = $stmt->fetch();

    if ($user) {
        // MODIFIED SECTION - Always go to dashboard for testing
        $_SESSION['student_id'] = $user['student_id'];
        $_SESSION['student_number'] = $user['student_number'];
        $_SESSION['full_name'] = $user['first_name'] . ' ' . $user['last_name'];
        $_SESSION['logged_in'] = true;
        
        // FOR TESTING - Skip password change and go straight to dashboard
        header('Location: ./student/index.php');
        exit;
        
        /* Original code (commented out for now)
        if ($user['password'] === null) {
            $_SESSION['force_password_change'] = true;
            header('Location: change_password.php');
        } else {
            header('Location: ./student/index.php');
        }
        exit;
        */
    }
    
    $_SESSION['login_error'] = 'Invalid credentials or account not enrolled';
    header('Location: login.php');
    exit;
    
} catch (PDOException $e) {
    error_log("Login error: " . $e->getMessage());
    $_SESSION['login_error'] = 'System error. Please try again.';
    header('Location: login.php');
    exit;
}