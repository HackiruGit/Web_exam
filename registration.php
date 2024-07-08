<!-- register.php -->
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
</head>
<body>
    <h2>Регистрация пользователя</h2>
    <form action="register.php" method="post">
        <label for="username">Имя пользователя:</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Пароль:</label><br>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" value="Зарегистрировать">
    </form>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $conn = new mysqli('localhost', 'root', 'password', 'webapp');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        if ($conn->query($sql) === TRUE) {
            echo "<p>Пользователь успешно зарегистрирован.</p>";
        } else {
            echo "<p>Ошибка при регистрации пользователя: " . $conn->error . "</p>";
        }
        
        $conn->close();
    }
    ?>
</body>
</html>
