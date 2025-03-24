<?php
include 'config.php';

if (isset($_GET['id']) && isset($_GET['action'])) {
    $id = $_GET['id'];
    $action = $_GET['action'];

    if ($action == 'approve') {
        $status = 'approved';
    } elseif ($action == 'reject') {
        $status = 'rejected';
    } else {
        echo "Invalid action!";
        exit;
    }

    // Update registration status
    $query = "UPDATE registrations SET status = ? WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("si", $status, $id);

    if ($stmt->execute()) {
        echo "Registration status updated successfully!";
    } else {
        echo "Error updating status: " . $conn->error;
    }
}
?>
