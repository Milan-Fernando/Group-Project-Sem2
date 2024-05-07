<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link rel="stylesheet" href="user_signup.css">
</head>
<body>
<?php include 'header.php'; ?>

<div class="main-content">
  <h1>Sign Up</h1>
  <form>
    <label for="university"> University/Campus/Institute </label>
    <select> University/Campus/Institute
      <option value=""disabled selected required>Select..</option>
      <option value="colombo">University of Colombo</option>
      <option value="kelaniya">University of Kelaniya</option>
      <option value="rajarata">University of Rajarata</option>
      <option value="colombo">University of Moratuwa</option>
      <option value="colombo">University of Jayawardhanapura</option>
      <option value="colombo">University of South Easten</option>
      <option value="colombo">University of Ruhuna</option>
      <option value="colombo"> Open University </option>
      <option value="colombo">General Sri John Kothelawala Defence University</option>
      <option value="colombo">SLIATE</option>
      <option value="sliate">SLIIT</option>
      <option value="colombo">ESOFT</option>
      <option value="colombo">NSBM</option>
    </select> <br> <br>
    <input type="text" placeholder="Full Name" required>
    <input type="text" placeholder="Reg_No" required>
    <input type="text" placeholder="ID_No" required>
    <input type="email" placeholder="Email" required>
    <input type="password" placeholder="Password" required>
    <input type="password" placeholder="Confirm_Password" required> <br>
    <button type="submit">Sign Up</button>
  </form>
  <p>Already have an account? <a class="signin" href="user_signin.php">Sign In</a></p>
</div>

</body>
</html>
