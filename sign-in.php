<?php
session_start();

// Dummy credentials (replace with DB lookup in real app)
$valid_username = "admin";
$valid_password = "12345"; // In real use: password_hash() and password_verify()

// If form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php"); // Redirect after login
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign In</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .login-box {
            width: 300px;
            margin: 100px auto;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 8px;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
        }
        input[type="submit"] {
            background-color: #28a745;
            color: white;
            padding: 8px;
            border: none;
            width: 100%;
        }
        .error { color: red; }
    </style>
</head>
<body>

<div class="login-box">
    <h2>Sign In</h2>
    <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>

    <form method="POST" action="">
        <label>Username:</label>
        <input type="text" name="username" required>

        <label>Password:</label>
        <input type="password" name="password" required>

        <input type="submit" value="Sign In">
    </form>
</div>

</body>
</html>
