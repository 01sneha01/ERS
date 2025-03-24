<?php
session_start();
include 'config.php';

// Fetch events dynamically from the database
$query = "SELECT event_name FROM events";
$stmt = $pdo->query($query);
$events = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Event - Register for Events</title>
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

        /* Container */
        .register-section {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 400px;
            text-align: center;
        }

        /* Form Styles */
        .registration-form {
            margin-top: 15px;
        }

        label {
            font-weight: bold;
            display: block;
            margin: 10px 0 5px;
            text-align: left;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            background: #3498db;
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            font-size: 18px;
            cursor: pointer;
            border-radius: 5px;
            transition: 0.3s;
        }

        button:hover {
            background: #2980b9;
        }

        /* Error & Success Messages */
        .error {
            color: red;
            font-size: 14px;
        }

        .success {
            color: green;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <section class="register-section">
        <h1>Register for Events</h1>
        <p>Join your favorite events by filling out the form below.</p>

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

        <div class="registration-form">
            <form action="register_process.php" method="post" onsubmit="return validateForm()">
                <label for="full-name">Full Name</label>
                <input type="text" id="full-name" name="full_name" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>

                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" required>

                <label for="event">Select Event</label>
                <select id="event" name="event" required>
                    <option value="" disabled selected>Choose an event</option>
                    <?php foreach ($events as $event): ?>
                        <option value="<?= htmlspecialchars($event['event_name']) ?>"><?= htmlspecialchars($event['event_name']) ?></option>
                    <?php endforeach; ?>
                </select>

                <label for="ticket-quantity">Number of Tickets</label>
                <input type="number" id="ticket-quantity" name="ticket_quantity" min="1" max="10" value="1" required>

                <button type="submit">Register Now</button>
            </form>
        </div>
    </section>

    <script>
        function validateForm() {
            let email = document.getElementById("email").value;
            let phone = document.getElementById("phone").value;
            let ticketQuantity = document.getElementById("ticket-quantity").value;
            let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            let phonePattern = /^98\d{8}$/;

            // Email validation
            if (!emailPattern.test(email)) {
                alert("Please enter a valid email address.");
                return false;
            }

            // Phone number validation
            if (!phonePattern.test(phone)) {
                alert("Please enter a valid 10-digit phone number.");
                return false;
            }

            // Ticket quantity validation
            if (ticketQuantity < 1) {
                alert("Number of tickets must be at least 1.");
                return false;
            }

            return true;
        }
    </script>
</body>
</html>
