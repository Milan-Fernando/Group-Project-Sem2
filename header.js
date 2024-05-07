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
        <button class="signupbtn" onclick="signup"><a href="user_signup.php">Sign up as a student</a></button> <br>
        <button class="signupbtn" onclick="signup"><a href="company_signup.php">Sign up as a company</a></button> <br>
        <button class="signupbtn" onclick="signup"><a href="admin_signup.php">Sign up as an admin</a></button>
      </div>
    `;
  } else if (action === 'signin') {
    smallWindowContent.innerHTML = `
      <div class="roles">
        <button class="signinbtn" onclick="signin"><a href="user_signin.php">Sign in as a student</a></button> <br>
        <button class="signinbtn" onclick="signin"><a href="company_signin.php">Sign in as a company</a></button> <br>
        <button class="signinbtn" onclick="signin"><a href="admin_signin.php">Sign in as an admin</a></button>
      </div>
    `;
  }
}

function closeWindow() {
  var smallWindow = document.getElementById("smallWindow");
  smallWindow.style.display = "none";
}

/*
function signup(role) {
  // Handle signup for the specified role
  alert("Sign up as " + role);
}

function signin(role) {
  // Handle signin for the specified role
  alert("Sign in as " + role);
}
*/
