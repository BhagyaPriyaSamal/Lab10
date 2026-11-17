<?php
declare(strict_types=1);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: authorization.html');
    exit;
}

$name = trim((string) ($_POST['name'] ?? ''));
$age = filter_var($_POST['age'] ?? null, FILTER_VALIDATE_INT);
if ($name === '' || mb_strlen($name) > 100 || $age === false || $age < 0 || $age > 130) {
    http_response_code(400);
    exit('Please enter a valid name and an age from 0 to 130.');
}

$safeName = htmlspecialchars($name, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
$message = $age < 18
    ? "Hello, {$safeName}, you are not authorized to visit the site."
    : "Welcome to this site, {$safeName}!";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Authorization result</title>
</head>
<body>
    <h1><?= $message ?></h1>
    <a href="authorization.html">Go back</a>
</body>
</html>
