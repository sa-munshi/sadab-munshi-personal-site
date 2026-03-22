<?php
/**
 * export.php
 * Handles JSON and CSV exports of contact form messages.
 * Protected by the same secret key as messages.php.
 * Usage:
 *   /export.php?key=<SECRET_KEY>&format=json
 *   /export.php?key=<SECRET_KEY>&format=csv
 * Downloads the file instantly as messages.json or messages.csv.
 */

// Never expose PHP errors to the browser
error_reporting(0);
ini_set('display_errors', 0);

// Instruct crawlers not to index this admin endpoint
header('X-Robots-Tag: noindex, nofollow');

define('SECRET_KEY', 'a77c7988d0249e9c98350084d5dd42517f8d1b83e2c43db5126fd0a2d046187b');

$provided_key = isset($_GET['key']) ? $_GET['key'] : '';

if (!hash_equals(SECRET_KEY, $provided_key)) {
    http_response_code(403);
    echo '403 Forbidden';
    exit;
}

$format = isset($_GET['format']) ? strtolower(trim($_GET['format'])) : '';

if ($format !== 'json' && $format !== 'csv') {
    http_response_code(400);
    echo 'Invalid format. Use format=json or format=csv.';
    exit;
}

require_once __DIR__ . '/db.php';

// Fetch all messages, newest first
$result = $mysqli->query("SELECT id, name, email, message, created_at FROM messages ORDER BY created_at DESC");
$messages = [];
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $messages[] = $row;
    }
    $result->free();
}

$mysqli->close();

if ($format === 'json') {
    header('Content-Type: application/json; charset=utf-8');
    header('Content-Disposition: attachment; filename="messages.json"');
    echo json_encode($messages, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    exit;
}

if ($format === 'csv') {
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename="messages.csv"');

    $out = fopen('php://output', 'w');
    // UTF-8 BOM for Excel compatibility
    fputs($out, "\xEF\xBB\xBF");
    // Header row
    fputcsv($out, ['ID', 'Name', 'Email', 'Message', 'Date']);
    foreach ($messages as $msg) {
        fputcsv($out, [
            $msg['id'],
            $msg['name'],
            $msg['email'],
            $msg['message'],
            $msg['created_at'],
        ]);
    }
    fclose($out);
    exit;
}
