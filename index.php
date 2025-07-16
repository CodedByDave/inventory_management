<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EnrollHub - Login</title>
    
    <?php
        include 'includes/header.php'
    ?>
<body class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="login-container bg-white p-4 p-md-5">
        <div class="text-center mb-1">
            <img src="./assets/images/logo.png" alt="EnrollHub Logo" class="img-fluid logo-img">
        </div>

        <h2 class="h5 text-center mb-4">Login to your account</h2>
        
        <form>
            <div class="mb-3">
                <label for="username" class="form-label">Student or Email Address</label>
                <input type="text" class="form-control" id="username" placeholder="Enter student number or email">
            </div>
            
            <div class="mb-3">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <label for="password" class="form-label">Password</label>
                    <a href="#" class="text-decoration-none" style="font-size: 0.875rem;">Forgot password?</a>
                </div>
                <div class="password-container">
                    <input type="password" class="form-control pe-5" id="password" placeholder="Enter your password">
                    <i class="password-toggle fas fa-eye" id="togglePassword"></i>
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary w-100 mb-3">Sign in</button>
            
            <div class="divider">
                <span>OR</span>
            </div>
            
            <button type="button" class="btn btn-danger w-100 mb-3 text-white">
                <i class="fab fa-google me-2"></i> Sign in with Google
            </button>
            
            <div class="text-center text-muted mt-4" style="font-size: 0.75rem;">
                Copyright © EnrollHub. Developed by Dave Magno 2025.
            </div>
        </form>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const togglePassword = document.querySelector('#togglePassword');
            const password = document.querySelector('#password');
            
            togglePassword.addEventListener('click', function() {
                // Toggle the type attribute
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
                
                // Toggle the eye icon
                this.classList.toggle('fa-eye');
                this.classList.toggle('fa-eye-slash');
            });
        });
    </script>
</body>
</html>