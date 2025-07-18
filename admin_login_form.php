<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EnrollHub - Login</title>

    <link rel="stylesheet" href="./assets/css/components/login.css">

    <?php include 'includes/header.php'; ?>

<body class="d-flex justify-content-center align-items-center min-vh-100 bg-light">

    <!-- Login Card -->
    <div class="card login-card shadow-sm p-3 p-md-4 bg-white">
        <div class="card-body">
            <a href="index.php">
                <div class="text-center mb-3">
                    <img src="./assets/images/logo.png" alt="EnrollHub Logo" class="img-fluid logo-img">
                </div>
            </a>
            <h2 class="h5 text-center mb-4">Login to your account</h2>

            <?php
                session_start();

                if (!empty($_SESSION['login_error'])) {
                    echo '<div class="alert alert-danger text-start" role="alert">' . htmlspecialchars($_SESSION['login_error']) . '</div>';
                    unset($_SESSION['login_error']);
                }
            ?>

            <form action="admin_login.php" method="POST">
                <div class="mb-3">
                    <label for="adminNumber" class="form-label">Admin Number</label>
                    <input type="text" class="form-control" id="adminNumber" name="adminNumber" placeholder="Enter admin number">
                </div>

                <div class="mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <label for="password" class="form-label">Password</label>
                    </div>
                    <div class="password-container">
                        <input type="password" class="form-control pe-5" id="password" name="password"  placeholder="Enter your password">
                        <i class="password-toggle fas fa-eye" id="togglePassword"></i>
                    </div>
                </div>

                <button type="submit" class="btn btn-dark w-100 mb-3">Sign in</button>

                <div class="text-center text-muted mt-4" style="font-size: 0.75rem;">
                    Copyright © EnrollHub. Developed by Dave Magno 2025.
                </div>
            </form>
        </div>
    </div>

    <?php
        include 'includes/footer.php'
    ?>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const togglePassword = document.querySelector('#togglePassword');
            const password = document.querySelector('#password');

            togglePassword.addEventListener('click', function () {
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
                this.classList.toggle('fa-eye');
                this.classList.toggle('fa-eye-slash');
            });
        });
    </script>
</body>
</html>