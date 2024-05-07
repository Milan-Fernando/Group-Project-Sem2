<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reset Password</title>
  <link rel="stylesheet" href="reset2.css">
</head>
<body>
<?php include 'header.php'; ?>

<div class="main-content">
  <h1>Reset Password</h1>
  <form action="" method="post">
    <input type="text" placeholder="Mobile" required> <br>
    <input type="text" placeholder="OTP" required> <br>
    <button type="submit">Reset</button>
  </form> 
  <br> <br>
  <p>
    <a class="change" href="reset.php"> Try another way </a>
    <a class="signin" href="user_signin.php">Sign in with exsist account</a>
  </p>
</div>

</body>
</html>
