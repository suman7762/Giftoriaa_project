<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account - Giftoriaa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
    
</head>
<body>

<i class="bi bi-box-seam floating-box box-1" style="--rot: 15deg;"></i>
<i class="bi bi-box-seam floating-box box-2" style="--rot: -20deg;"></i>
<i class="bi bi-box-seam floating-box box-3" style="--rot: -10deg;"></i>
<i class="bi bi-box-seam floating-box box-4" style="--rot: 25deg;"></i>
<i class="bi bi-box-seam floating-box box-5" style="--rot: 5deg;"></i>
<i class="bi bi-box-seam floating-box box-6" style="--rot: -5deg;"></i>

<div class="auth-container">
    <div class="top-heart"><i class="bi bi-heart-fill"></i></div>
    
    <div class="brand-logo">ALight</div>

    <div class="auth-tabs">
        <button class="tab-btn active" onclick="switchTab('login')">Login</button>
        <button class="tab-btn" onclick="switchTab('signup')">Sign Up</button>
    </div>

    <form id="loginForm" class="auth-form active" action="login_process.php" method="POST">
        <div class="input-group">
            <label>Email Address</label>
            <div class="input-wrapper">
                <i class="bi bi-envelope"></i>
                <input type="email" name="email" placeholder="Enter your email" required>
            </div>
        </div>

        <div class="input-group">
            <label>Password</label>
            <div class="input-wrapper">
                <i class="bi bi-lock"></i>
                <input type="password" name="password" placeholder="Enter your password" required>
            </div>
        </div>

        <div class="forgot-pass">
            <a href="#">Forgot Password?</a>
        </div>

        <button type="submit" class="submit-btn">Access My Account</button>
    </form>

    <form id="signupForm" class="auth-form" action="signup_process.php" method="POST">
        <div class="input-group">
            <label>Full Name</label>
            <div class="input-wrapper">
                <i class="bi bi-person"></i>
                <input type="text" name="name" placeholder="Your full name" required>
            </div>
        </div>

        <div class="input-group">
            <label>Email Address</label>
            <div class="input-wrapper">
                <i class="bi bi-envelope"></i>
                <input type="email" name="email" placeholder="Your email id" required>
            </div>
        </div>

        <div class="input-group">
            <label>Create Password</label>
            <div class="input-wrapper">
                <i class="bi bi-lock"></i>
                <input type="password" name="password" placeholder="Create strong password" required>
            </div>
        </div>

        <div class="input-group">
            <label>Confirm Password</label>
            <div class="input-wrapper">
                <i class="bi bi-shield-check"></i>
                <input type="password" name="password_confirmation" placeholder="Repeat password" required>
            </div>
        </div>

        <button type="submit" class="submit-btn">Create Account</button>
    </form>
</div>

<script>
    function switchTab(type) {
        const tabs = document.querySelectorAll('.tab-btn');
        const forms = document.querySelectorAll('.auth-form');

        tabs.forEach(tab => tab.classList.remove('active'));
        forms.forEach(form => form.classList.remove('active'));

        if(type === 'login') {
            tabs[0].classList.add('active');
            document.getElementById('loginForm').classList.add('active');
        } else {
            tabs[1].classList.add('active');
            document.getElementById('signupForm').classList.add('active');
        }
    }
</script>

</body>
</html>