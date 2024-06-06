function toggleDropdown() {
  var dropdown = document.getElementById("dropdown");
  dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
}

function openWindow(action) {
  var smallWindow = document.getElementById("smallWindow");
  var smallWindowContent = document.getElementById("smallWindowContent");
  smallWindow.style.display = "block";
  if (action === 'signup') {
    smallWindowContent.innerHTML = `
      <div class="roles">
        <button class="signupbtn" onclick="signup('student')"><a href="user_signup.php">Sign up as a student</a></button> <br>
        <button class="signupbtn" onclick="signup('company')"><a href="company_signup.php">Sign up as a company</a></button> <br>
        <button class="signupbtn" onclick="signup('admin')"><a href="admin_signup.php">Sign up as an admin</a></button>
      </div>
    `;
  } else if (action === 'signin') {
    smallWindowContent.innerHTML = `
      <div class="roles">
        <button class="signinbtn" onclick="signin('student')"><a href="user_signin.php">Sign in as a student</a></button> <br>
        <button class="signinbtn" onclick="signin('company')"><a href="company_signin.php">Sign in as a company</a></button> <br>
        <button class="signinbtn" onclick="signin('admin')"><a href="admin_signin.php">Sign in as an admin</a></button>
      </div>
    `;
  }
}

function closeWindow() {
  var smallWindow = document.getElementById("smallWindow");
  smallWindow.style.display = "none";
}

function openUserProfile() {
  var userProfileWindow = document.getElementById("userProfileWindow");
  userProfileWindow.style.display = "block";
  var userProfileContent = document.getElementById("userProfileContent");
  userProfileContent.innerHTML = `
    <div class="prof-details">
    <h2>User Profile</h2>
    <p>Name: A.B.C. Perera</p>
    <p>University: University of Colombo</p>
    <p>Registration Number: 123456</p>
    <p>Points: 100</p>
    <p>Completed Tasks: 10</p>
    </div>
  `;
}

function closeUserProfile() {
  var userProfileWindow = document.getElementById("userProfileWindow");
  userProfileWindow.style.display = "none";
}
