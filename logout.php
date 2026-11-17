<?php
declare(strict_types=1);
session_start();

if (!isset($_SESSION['name'], $_SESSION['started_at'])) {
    header('Location: index.php');
    exit;
}

$name = htmlspecialchars((string) $_SESSION['name'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
$duration = max(0, time() - (int) $_SESSION['started_at']);
$_SESSION = [];
if (ini_get('session.use_cookies')) {
    $cookie = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000, $cookie['path'], $cookie['domain'], $cookie['secure'], $cookie['httponly']);
}
session_destroy();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Logged out</title>
</head>
<body>
    <h1>Thank you, <?= $name ?>!</h1>
    <p>Your session lasted <?= gmdate('H:i:s', $duration) ?> (hours:minutes:seconds).</p>
    <a href="index.php">Start again</a>
</body>
</html>
