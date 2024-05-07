<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign In</title>
  <link rel="stylesheet" href="user_signin.css">
</head>
<body>
<?php include 'header.php'; ?>


<div class="main-content">
  <h1>Sign In</h1>
  <form>
    <input type="email" placeholder="Email" required>
    <input type="text" placeholder="Reg_No" required>
    <input type="password" placeholder="Password" required> <br>
    <button type="submit">Sign In</button>
  </form>
  <p>
    <a class="reset" href="reset.php"> Reset Password? </a> <br>
    Don't have an account? <a class="signup" href="user_signup.php">Sign Up</a></p>
</div>

</body>
</html>
