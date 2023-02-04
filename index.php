<?php
session_start();
if ($_SESSION['user']) {
    header('Location: profile.php');
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css">
    <title>Авторизация</title>
</head>
<body>

    <form action="vendor/signin.php" method="post">
        <label>Логин</label>
        <input type="email" name="email" placeholder="Введите свою почту">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <button type="submit">Войти</button>
        <p>Нет аккаунта? - <a href="register.php">зарегистрируйтесь</a></p>

        <?php
        if ($_SESSION['message']) {
            echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
        }
        unset($_SESSION['message']);
        ?>

    </form>



</body>
</html>