<!-- login.php -->
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
</head>
<body>
    <h2>Авторизация пользователя</h2>
    <form action="welcome.php" method="post">
        <label for="username">Имя пользователя:</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Пароль:</label><br>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" value="Войти">
    </form>
</body>
</html>
