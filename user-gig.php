<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manage Your Gigs</title>
  <link rel="stylesheet" href="user-gig.css">
</head>
<body>
<?php include 'header2.php'; ?>

<div class="main-content">
  <h1>Manage Your Gigs</h1>
  <p>Welcome to the gig management page. Here you can view and update your gigs.</p>
</div>

<div class="update-gig">
  <h2>Update Your Gig</h2>
  <form>
    <input type="text" placeholder="Full Name" required><br>
    <input type="email" placeholder="Email" required><br>
    <input type="password" placeholder="New Password"><br>
    <input type="password" placeholder="Confirm New Password"><br>
    <input type="file" accept="image/*"><br>
    <button type="submit">Update Gig</button>
  </form>
</div>

<script>
  function updategig() {
    alert("Profile updates will be implemented soon!");
  }
</script>

</body>
</html>
