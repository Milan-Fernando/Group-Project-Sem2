<?php
include 'dbcon.php'; // Include the database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $university = $_POST['university'];
    $fullname = $_POST['fullname'];
    $regno = $_POST['regno'];
    $idno = $_POST['idno'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Perform basic validation
    if ($password != $confirm_password) {
        echo "Passwords do not match. Please try again.";
        exit;
    }

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    try {
        // SQL query to insert data into users table
        $stmt = $pdo->prepare("INSERT INTO users (university, fullname, regno, idno, email, password) 
                               VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([$university, $fullname, $regno, $idno, $email, $hashed_password]);

        echo "Sign up successful!";

        // Optionally, you can redirect the user to a different page after successful signup
        // header("Location: success.php");
        // exit;
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
