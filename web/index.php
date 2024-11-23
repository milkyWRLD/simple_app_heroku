<?php
// index.php
session_start();

$username = $_SESSION['username'] ?? null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Простое приложение</title>
</head>
<body>
<h1>Добро пожаловать!</h1>
<?php if ($username): ?>
    <p>Привет, <?php echo htmlspecialchars($username); ?>!</p>
    <a href="exit.php">Выйти</a>
<?php else: ?>
    <form action="post.php" method="post">
        <label for="username">Введите ваше имя:</label>
        <input type="text" id="username" name="username" required>
        <button type="submit">Отправить</button>
    </form>
<?php endif; ?>
</body>
</html>
