<?php
include 'config.php';

if (!$pdo) {
    die("Database connection failed.");
}
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    if (empty($email) || empty($password)) {
        $_SESSION["login_error"] = "Please fill in both fields.";
        header("Location: login.php");
        exit;
    }

    try {
        $query = "SELECT id, name, password FROM users WHERE email = ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) { 
            error_log("Stored Hashed Password: " . $user["password"]);
            if ($password === $user["password"]) {
                session_regenerate_id(true);
                $_SESSION["user_id"] = $user["id"];
                $_SESSION["name"] = $user["name"];
                header("Location: home.php");
                exit;
            } else {
                $_SESSION["login_error"] = "Incorrect password.";
            }
        } else {
            $_SESSION["login_error"] = "No account found with this email.";
        }
    } catch (PDOException $e) {
        error_log("Login Error: " . $e->getMessage()); // Logs error to server
        $_SESSION["login_error"] = "Database error, please try again later.";
    }

    header("Location: login.php");
    exit;
}
?>
