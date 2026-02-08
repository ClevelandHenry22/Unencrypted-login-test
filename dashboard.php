<?php
session_start();

// If no login session, redirect to login page
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: index.html");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Dashboard</title>
<meta charset="UTF-8">
<style>
body {
    background: #101820;
    color: #00b7ff;
    font-family: Arial;
    text-align: center;
    padding-top: 120px;
}
.box {
    background: #1c2a34;
    margin: auto;
    padding: 30px;
    width: 50%;
    border-radius: 12px;
    box-shadow: 0 0 12px rgba(0,0,0,0.5);
}
button {
    margin-top: 20px;
    padding: 10px 20px;
    background: #00b7ff;
    border: none;
    color: #101820;
    font-size: 16px;
    border-radius: 6px;
    cursor: pointer;
}
button:hover {
    opacity: 0.8;
}
</style>
</head>

<body>

<div class="box">
    <h1>Welcome Admin</h1>
    <p>You have successfully logged in.</p>
    <p>Your credentials were transmitted insecurely and logged for Wireshark analysis.</p>

    <form action="logout.php" method="POST">
        <button type="submit">Logout</button>
    </form>
</div>

</body>
</html>
