<?php
include 'config.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!isset($_POST["action"])) {
        $_SESSION["auth_error"] = "Invalid request.";
        header("Location: login.php");
        exit;
    }

    $action = $_POST["action"];
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    if (empty($email) || empty($password)) {
        $_SESSION["auth_error"] = "Please fill in all fields.";
        header("Location: login.php");
        exit;
    }

    try {
        if ($action === "register") {
            // Check if email already exists
            $checkQuery = "SELECT id FROM users WHERE email = ?";
            $stmt = $pdo->prepare($checkQuery);
            $stmt->execute([$email]);
            $existingUser = $stmt->fetch();

            if ($existingUser) {
                $_SESSION["auth_error"] = "Email already registered.";
                header("Location: login.php");
                exit;
            }

            // Hash password before storing
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $query = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$_POST["name"], $email, $hashedPassword]);

            $_SESSION["auth_success"] = "Registration successful! Please log in.";
            header("Location: login.php");
            exit;
        } elseif ($action === "login") {
            // Fetch user details from the database
            $query = "SELECT id, name, password FROM users WHERE email = ?";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$email]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user) {
                // Debugging: Log the stored hashed password
                error_log("Stored Hashed Password: " . $user["password"]);

                if (password_verify($password, $user["password"])) {
                    session_regenerate_id(true);
                    $_SESSION["user_id"] = $user["id"];
                    $_SESSION["name"] = $user["name"];
                    header("Location: home.php");
                    exit;
                } else {
                    $_SESSION["auth_error"] = "Incorrect email or password.";
                }
            } else {
                $_SESSION["auth_error"] = "No account found with this email.";
            }
        }
    } catch (PDOException $e) {
        error_log("Auth Error: " . $e->getMessage());
        $_SESSION["auth_error"] = "Database error, please try again later.";
    }

    header("Location: login.php");
    exit;
}
?>
