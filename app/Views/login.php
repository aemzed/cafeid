html

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
<div class="login-container">
    <div class="login-box">
        <h2>Log In</h2>
        <form action="<?= site_url('login/authenticate') ?>" method="post">
            <div class="input-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="options">
                <label>
                    <input type="checkbox" name="remember"> Remember me
                </label>
                <a href="<?= site_url('password/forgot') ?>">Forgot your password?</a>
            </div>
            <button type="submit" class="login-button">Log In</button>
        </form>
        <p>Don't have an account? <a href="<?= site_url('register') ?>">Sign in Now!</a></p>
    </div>
</div>
</body>
</html>