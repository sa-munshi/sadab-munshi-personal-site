<?php
/**
 * messages.php
 * Admin page that displays all contact form submissions.
 * Protected by a secret key passed as a URL parameter:
 *   /messages.php?key=a77c7988d0249e9c98350084d5dd42517f8d1b83e2c43db5126fd0a2d046187b
 * Wrong or missing key returns a 403 Forbidden response.
 * Displays messages newest-first in a clean minimal table
 * with Export as JSON and Export as CSV buttons.
 */

define('SECRET_KEY', 'a77c7988d0249e9c98350084d5dd42517f8d1b83e2c43db5126fd0a2d046187b');

$provided_key = isset($_GET['key']) ? $_GET['key'] : '';

if (!hash_equals(SECRET_KEY, $provided_key)) {
    http_response_code(403);
    echo '<!DOCTYPE html><html><head><title>403 Forbidden</title></head><body><h1>403 Forbidden</h1><p>You do not have permission to access this page.</p></body></html>';
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

$export_base = '/export.php?key=' . urlencode(SECRET_KEY);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Messages — Admin</title>
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    body {
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
      font-size: 0.9375rem;
      background: #f5f5f3;
      color: #1a1a1a;
      padding: 2rem 1rem;
    }
    .container { max-width: 960px; margin: 0 auto; }
    h1 { font-size: 1.5rem; font-weight: 600; margin-bottom: 1.5rem; }
    .toolbar {
      display: flex;
      gap: 0.75rem;
      margin-bottom: 1.5rem;
      flex-wrap: wrap;
      align-items: center;
    }
    .toolbar span { color: #666; font-size: 0.875rem; margin-right: auto; }
    .btn {
      display: inline-block;
      padding: 0.5rem 1.125rem;
      border-radius: 6px;
      font-size: 0.875rem;
      font-weight: 500;
      text-decoration: none;
      cursor: pointer;
      border: 1.5px solid #2f3331;
      color: #2f3331;
      background: transparent;
      transition: background 0.15s, color 0.15s;
    }
    .btn:hover { background: #2f3331; color: #fff; }
    .table-wrap { overflow-x: auto; border-radius: 8px; background: #fff; }
    table { width: 100%; border-collapse: collapse; }
    thead th {
      text-align: left;
      padding: 0.75rem 1rem;
      font-size: 0.8rem;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      color: #666;
      border-bottom: 1px solid #e8e8e6;
    }
    tbody td {
      padding: 0.875rem 1rem;
      border-bottom: 1px solid #f0f0ee;
      vertical-align: top;
      font-size: 0.9rem;
      word-break: break-word;
    }
    tbody tr:last-child td { border-bottom: none; }
    tbody tr:hover td { background: #fafaf8; }
    .col-id    { width: 50px; color: #999; }
    .col-name  { width: 140px; font-weight: 500; }
    .col-email { width: 200px; color: #4f6354; }
    .col-date  { width: 150px; color: #999; font-size: 0.825rem; white-space: nowrap; }
    .col-msg   { min-width: 260px; }
    .empty { text-align: center; padding: 3rem 1rem; color: #999; }
  </style>
</head>
<body>
<div class="container">
  <h1>Messages</h1>
  <div class="toolbar">
    <span><?php echo count($messages); ?> message<?php echo count($messages) !== 1 ? 's' : ''; ?></span>
    <a class="btn" href="<?php echo htmlspecialchars($export_base . '&format=json'); ?>">Export as JSON</a>
    <a class="btn" href="<?php echo htmlspecialchars($export_base . '&format=csv'); ?>">Export as CSV</a>
  </div>
  <div class="table-wrap">
    <?php if (empty($messages)): ?>
      <p class="empty">No messages yet.</p>
    <?php else: ?>
    <table>
      <thead>
        <tr>
          <th class="col-id">#</th>
          <th class="col-name">Name</th>
          <th class="col-email">Email</th>
          <th class="col-msg">Message</th>
          <th class="col-date">Date</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($messages as $msg): ?>
        <tr>
          <td class="col-id"><?php echo (int)$msg['id']; ?></td>
          <td class="col-name"><?php echo htmlspecialchars($msg['name'], ENT_QUOTES, 'UTF-8'); ?></td>
          <td class="col-email"><?php echo htmlspecialchars($msg['email'], ENT_QUOTES, 'UTF-8'); ?></td>
          <td class="col-msg"><?php echo nl2br(htmlspecialchars($msg['message'], ENT_QUOTES, 'UTF-8')); ?></td>
          <td class="col-date"><?php echo htmlspecialchars($msg['created_at'], ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <?php endif; ?>
  </div>
</div>
</body>
</html>
