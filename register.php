<!DOCTYPE html>
<html>
<head>
<title>Register | Sego</title>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="login-bg">

<div class="login-box">

  <div class="logo">
    <div class="logo-icon">Sg</div>
    <div class="logo-text">Sego</div>
  </div>

  <h3>Register</h3>

  <form method="POST" action="auth/register_process.php">
    <input type="text" name="name" placeholder="Full Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Register</button>
  </form>

  <p>Already have account? <a href="index.php">Login</a></p>

</div>

</body>
</html>
