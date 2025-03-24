<?php
include 'send_email.php';  // Include email function

// Get payment details from Khalti
$data = json_decode(file_get_contents("php://input"));
$token  = $data->token;
$amount = $data->amount;
$secret_key = "test_secret_key_dc74a6a3b7b548778b24b5a1efebbf79";  // Replace with your Khalti Secret Key

// Verify payment with Khalti API
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://khalti.com/api/v2/payment/verify/");
curl_setopt($ch, CURLOPT_HTTPHEADER, ["Authorization: Key $secret_key"]);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(['token' => $token, 'amount' => $amount]));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

$result = json_decode($response, true);

if (isset($result['idx'])) {
    // Payment is successful, update database
    $conn = new mysqli("localhost", "root", "", "event_system");  
    $email = "user@example.com";  // Fetch from session or DB
    $name  = "John Doe";  // Fetch from session or DB

    $update_sql = "UPDATE registrations SET status='paid' WHERE email='$email'";
    mysqli_query($conn, $update_sql);

    // Send confirmation email
    sendConfirmationEmail($email, $name);

    $result['status'] = "success";
} else {
    $result['status'] = "failed";
}

header('Content-Type: application/json');
echo json_encode($result);
?>
