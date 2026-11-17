<?php
declare(strict_types=1);
date_default_timezone_set('Asia/Kolkata');
$now = new DateTimeImmutable('now');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Current date and time</title>
</head>
<body>
    <h1>Current date and time</h1>
    <p>Date: <?= htmlspecialchars($now->format('Y-m-d'), ENT_QUOTES, 'UTF-8') ?></p>
    <p>Time: <?= htmlspecialchars($now->format('H:i:s'), ENT_QUOTES, 'UTF-8') ?></p>
    <p>Day: <?= htmlspecialchars($now->format('l'), ENT_QUOTES, 'UTF-8') ?></p>
</body>
</html>
