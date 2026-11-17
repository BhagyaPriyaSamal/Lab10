<?php
declare(strict_types=1);
session_start();

if (isset($_SESSION['name'], $_SESSION['started_at'])) {
    header('Location: hello.php');
    exit;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lab 10 — Greeting</title>
</head>
<body>
    <h1>Welcome</h1>
    <form action="hello.php" method="post">
        <label for="name">Your name</label>
        <input id="name" name="name" type="text" required maxlength="100">
        <button type="submit">Continue</button>
    </form>
</body>
</html>
