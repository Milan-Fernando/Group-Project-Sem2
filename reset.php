<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reset Password</title>
  <link rel="stylesheet" href="reset.css">
</head>
<body>
<?php include 'header.php'; ?>

<div class="main-content">
  <h1>Reset Password</h1>
  <form action="" method="post">
    <input type="email" placeholder="Email" required>
    <input type="text" placeholder="Recovery_Code" required> <br>
    <button type="submit">Reset</button>
  </form>
  <br> <br>
  <p>
    <a class="change" href="reset2.php"> Try another way </a>
    <a class="signin" href="user_signin.php">Sign in with exsist account</a></p>
</div>

</body>
</html>
