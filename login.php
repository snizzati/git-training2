<?php
// Start session
session_start();

// Dummy credentials (replace with database query in real use)
$valid_username = "admin";
$valid_password = "12345"; // in real projects, store hashed password

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php"); // redirect after login
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
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
    <h2>Login</h2>

    <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>

    <form method="POST" action="">
        <label>Username:</label>
        <input type="text" name="username" required>

        <label>Password:</label>
        <input type="password" name="password" required>

        <input type="submit" value="Login">
    </form>
</div>

</body>
</html>
