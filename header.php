<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="header.css">
</head>
<body>

<nav class="navbar">
  <div class="navbar-container">
    <div><a class="code" href="home.php">CodePlus</a></div>
    <div class="profile-wrapper">
      
      <button class="view-prof" onclick="openUserProfile()">View Profile</div>
      <button class="signupbtnmain" onclick="openWindow('signup')">Sign Up</button>
      <button class="signinbtnmain" onclick="openWindow('signin')">Sign In</button>

    </div>
  </div>
</nav>

<div id="smallWindow" class="window">
  <button class="close" onclick="closeWindow()">x</button>
  <div id="smallWindowContent"></div>
</div>

<div id="userProfileWindow" class="user-profile-window">
  <button class="close" onclick="closeUserProfile()">x</button>
  <div id="userProfileContent" class="user-profile-content">
  </div>
</div>

<script src="header.js"></script>
</body>
</html>
