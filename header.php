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
      <div class="profile-icon" onclick="toggleDropdown()">
        <img src="pics/user_icon.jpg" alt="Profile Picture">
        <div class="dropdown" id="dropdown">
          <div class="signup">
            <button onclick="openWindow('signup')">Sign Up</button>
          </div>
          <div class="signin">
            <button onclick="openWindow('signin')">Sign In</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>

<!-- Small window -->
<div id="smallWindow" class="window">
  <button class="close" onclick="closeWindow()">x</button>
  <div id="smallWindowContent"></div>
</div>

<script src="header.js"></script>
</body>
</html>
