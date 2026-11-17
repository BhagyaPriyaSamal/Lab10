<?php
declare(strict_types=1);
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim((string) ($_POST['name'] ?? ''));
    if ($name === '' || mb_strlen($name) > 100) {
        http_response_code(400);
        exit('Please provide a name of 1 to 100 characters.');
    }
    $_SESSION['name'] = $name;
    $_SESSION['started_at'] = time();
} elseif (!isset($_SESSION['name'], $_SESSION['started_at'])) {
    header('Location: index.php');
    exit;
}

$name = htmlspecialchars((string) $_SESSION['name'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
$startedAt = date('H:i:s', (int) $_SESSION['started_at']);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello</title>
</head>
<body>
    <p>Session started at: <time><?= htmlspecialchars($startedAt, ENT_QUOTES, 'UTF-8') ?></time></p>
    <h1>Hello, <?= $name ?>!</h1>
    <form action="logout.php" method="post">
        <button type="submit">Log out</button>
    </form>
</body>
</html>
