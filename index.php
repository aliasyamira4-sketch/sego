<!DOCTYPE html>
<html>
<head>
<title>Login | Sego</title>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="login-bg">

<div class="login-box">

  <div class="logo">
    <div class="logo-icon">Sg</div>
    <div class="logo-text">Sego</div>
  </div>

  <h3>Login</h3>

  <form method="POST" action="auth/login.php">
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
  </form>

  <p><a href="forgot_password.php">Forgot Password?</a></p>
  <p>Don’t have account? <a href="register.php">Register</a></p>

</div>

</body>
</html>
