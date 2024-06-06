<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link rel="stylesheet" href="user_signup.css">
</head>
<body>
<?php
include 'header.php';
?>

<div class="main-content">
  <h1>Sign Up</h1>
  <form action="user_signup.php" method="POST">
    <label for="university">University/Campus/Institute</label>
    <select name="university" required>
      <option value="" disabled selected>Select..</option>
      <option value="University of Colombo">University of Colombo</option>
      <option value="University of Kelaniya">University of Kelaniya</option>
      <option value="University of Rajarata">University of Rajarata</option>
      <option value="University of Moratuwa">University of Moratuwa</option>
      <option value="University of Jayawardhanapura">University of Jayawardhanapura</option>
      <option value="University of South Easten">University of South Easten</option>
      <option value="University of Ruhuna">University of Ruhuna</option>
      <option value="Open University">Open University</option>
      <option value="General Sri John Kothelawala Defence University">General Sri John Kothelawala Defence University</option>
      <option value="SLIATE">SLIATE</option>
      <option value="SLIIT">SLIIT</option>
      <option value="ESOFT">ESOFT</option>
      <option value="NSBM">NSBM</option>
    </select><br><br>
    <input type="text" name="fullname" placeholder="Full Name" required>
    <input type="text" name="regno" placeholder="Reg_No" required>
    <input type="text" name="idno" placeholder="ID_No" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="password" name="confirm_password" placeholder="Confirm Password" required><br>
    <button type="submit">Sign Up</button>
  </form>
  <p>Already have an account? <a class="signin" href="user_signin.php">Sign In</a></p>
</div>

</body>
</html>
