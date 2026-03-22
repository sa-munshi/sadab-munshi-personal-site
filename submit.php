<?php
/**
 * submit.php
 * Handles contact form submissions via AJAX (no page reload).
 * Validates inputs, saves the message to the database using a prepared
 * statement to prevent SQL injection, and returns a JSON response.
 */

header('Content-Type: application/json');

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}

require_once __DIR__ . '/db.php';

// Retrieve inputs (htmlspecialchars is applied only on output, not on stored data)
$name    = isset($_POST['name'])    ? trim($_POST['name'])    : '';
$email   = isset($_POST['email'])   ? trim($_POST['email'])   : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';

// Basic validation
if (empty($name) || empty($email) || empty($message)) {
    echo json_encode(['success' => false, 'message' => 'Please fill in all fields.']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Please enter a valid email address.']);
    exit;
}

if (strlen($message) < 10) {
    echo json_encode(['success' => false, 'message' => 'Message is too short. Please write at least 10 characters.']);
    exit;
}

// Use a prepared statement to safely insert data (prevents SQL injection)
$stmt = $mysqli->prepare('INSERT INTO messages (name, email, message, created_at) VALUES (?, ?, ?, NOW())');
if (!$stmt) {
    echo json_encode(['success' => false, 'message' => 'Something went wrong. Please try again.']);
    $mysqli->close();
    exit;
}

$stmt->bind_param('sss', $name, $email, $message);

if ($stmt->execute()) {
    echo json_encode(['success' => true, 'message' => 'Thank you for your message. I will get back to you soon.']);
} else {
    echo json_encode(['success' => false, 'message' => 'Something went wrong. Please try again.']);
}

$stmt->close();
$mysqli->close();
