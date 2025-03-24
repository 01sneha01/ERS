<?php
session_start();
include 'config.php';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['full_name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);

    // Validation for email and phone
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION["register_error"] = "Invalid email format.";
    
    } else {
        // Insert data into the database
        try {
            $query = "INSERT INTO users (id, name, email, password) VALUES (NULL, :name, :email, :password)";
            $stmt = $pdo->prepare($query);

            // Using password_hash() for a secure password
            $hashedPassword = password_hash("defaultpassword", PASSWORD_BCRYPT); // Replace with a real password if needed

            $stmt->execute([
                ':name' => $name,
                ':email' => $email,
                ':password' => $hashedPassword
            ]);

            $_SESSION["register_success"] = "Registration successful!";
        } catch (PDOException $e) {
            $_SESSION["register_error"] = "Database error: " . $e->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        /* General Styles */
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #f0f0f0, #3498db);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .register-section {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 400px;
            text-align: center;
        }
        label, input, button {
            display: block;
            width: 100%;
            margin: 10px 0;
        }
        input, button {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            background: #3498db;
            color: white;
            font-size: 18px;
            cursor: pointer;
        }
        .success {
            color: green;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <section class="register-section">
        <h1>Register</h1>

        <?php
        if (isset($_SESSION["register_error"])) {
            echo "<p class='error'>".$_SESSION["register_error"]."</p>";
            unset($_SESSION["register_error"]);
        }
        if (isset($_SESSION["register_success"])) {
            echo "<p class='success'>".$_SESSION["register_success"]."</p>";
            unset($_SESSION["register_success"]);
        }
        ?>

        <form method="post" action="">
            <label for="full-name">Full Name</label>
            <input type="text" id="full-name" name="full_name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Password</label>
            <input type="tel" id="phone" name="phone" required>

            <button type="submit">Register</button>
        </form>
    </section>
</body>
</html>
