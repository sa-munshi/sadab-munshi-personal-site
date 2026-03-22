<?php
/**
 * db.php
 * Database connection for the contact form system.
 * Creates a MySQLi connection using InfinityFree credentials.
 * Include this file in any script that needs DB access.
 */

// Never expose PHP errors to the browser
error_reporting(0);
ini_set('display_errors', 0);

$db_host = 'sql101.infinityfree.com';
$db_user = 'if0_40628266';
$db_pass = 'iPVcCcKohgE';
$db_name = 'if0_40628266_sadabmunshisite';
$db_port = 3306;

$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name, $db_port);

if ($mysqli->connect_error) {
    http_response_code(500);
    die(json_encode(['success' => false, 'message' => 'Database connection failed.']));
}

$mysqli->set_charset('utf8mb4');
