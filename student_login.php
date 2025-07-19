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
    header('Location: student_login_form.php');
    exit;
}

try {
    $stmt = $db->prepare("SELECT student_id, student_number, first_name, last_name, accountabilities
                         FROM tbl_students 
                         WHERE student_number = :studentNumber
                         LIMIT 1");
    $stmt->bindParam(':studentNumber', $studentNumber);
    $stmt->execute();
    $user = $stmt->fetch();

    if ($user) {
        if (strcasecmp($password, $user['last_name']) === 0) {
            $_SESSION['student_id'] = $user['student_id'];
            $_SESSION['student_number'] = $user['student_number'];
            $_SESSION['full_name'] = $user['first_name'] . ' ' . $user['last_name'];
            $_SESSION['accountabilities'] = $user['accountabilities'];
            $_SESSION['logged_in'] = true;
            $_SESSION['login_success'] = 'Welcome back, ' . $_SESSION['full_name'] . '!';

            header('Location: ./student/index.php');
            exit;
        }
    }

    $_SESSION['login_error'] = 'Student number or password is incorrect';
    header('Location: student_login_form.php');
    exit;

} catch (PDOException $e) {
    error_log("Login error: " . $e->getMessage());
    $_SESSION['login_error'] = 'System error. Please try again.';
    header('Location: student_login_form.php');
    exit;
}
