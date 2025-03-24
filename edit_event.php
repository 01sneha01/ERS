<?php
include 'config.php'; // Include your database connection

// Get event ID from URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch event details
    $query = "SELECT * FROM events WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $event = $result->fetch_assoc();
} else {
    echo "Invalid event ID.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Event</title>
</head>
<body>
    <h2>Edit Event</h2>
    <form action="update_event.php" method="post">
        <input type="hidden" name="id" value="<?php echo $event['id']; ?>">
        
        <label>Event Name:</label>
        <input type="text" name="event_name" value="<?php echo $event['event_name']; ?>" required><br>

        <label>Event Date:</label>
        <input type="date" name="event_date" value="<?php echo $event['event_date']; ?>" required><br>

        <label>Organizer:</label>
        <input type="text" name="organizer" value="<?php echo $event['organizer']; ?>" required><br>

        <button type="submit">Update Event</button>
    </form>
</body>
</html>
