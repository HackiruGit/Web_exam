<!-- welcome.php -->
<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Приветствие</title>
</head>
<body>
    <h2>Привет, <?php echo htmlspecialchars($username); ?></h2>
    <a href="logout.php">Выход</a>
</body>
</html>
