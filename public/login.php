<?php
// Start session
session_start();

// Capture username and password from POST
$username = $_POST['user'] ?? '';
$password = $_POST['pass'] ?? '';

// Path to users.txt and log file (outside public folder)
$users_file = __DIR__ . '/../server/users.txt';
$log_file   = __DIR__ . '/../logs/login_attempts.log';

// Log every login attempt (for cybersecurity analysis)
$log_entry = "Username: $username | Password: $password | Time: " . date("Y-m-d H:i:s") . "\n";
file_put_contents($log_file, $log_entry, FILE_APPEND);

// Hard-coded valid credentials (intentionally insecure)
$valid_user = "admin";
$valid_pass = "password";

// Validate login
if ($username === $valid_user && $password === $valid_pass) {

    // Store successful credentials in users.txt
    $success_entry = "VALID LOGIN -> User: $username | Pass: $password\n";
    file_put_contents($users_file, $success_entry, FILE_APPEND);

    // Create login session
    $_SESSION['logged_in'] = true;

    // Redirect to dashboard
    header("Location: dashboard.php");
    exit();
    
} else {
    // Wrong credentials
    echo "<h2 style='color:red; text-align:center; margin-top:60px; font-family:Arial;'>Invalid Credentials</h2>";
    echo "<p style='text-align:center;'><a href='index.html'>Try Again</a></p>";
}
?>
