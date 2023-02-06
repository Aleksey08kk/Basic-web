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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Практическое задание номер 1.">
    <link rel="stylesheet" href="index.css">
    <title>Авторизация</title>
</head>
<body>

    <form class="form" action="backEndPhp/signin.php" method="post">
        <img class="labelСosmonaft" src="https://i.gifer.com/WME4.gif" alt="CosmonaftGIF">
        <input class="input" type="email" name="email" placeholder="Введите свою почту">
        <input class="input" type="password" name="password" placeholder="Введите пароль">
        <button class="buttonAuthorization" type="submit">Войти</button>
        <a class="labelAuthorization" href="register.php">Регистрация</a>

        <?php
        if ($_SESSION['message']) {
            echo '<p class="labelAuthorization"> ' . $_SESSION['message'] . ' </p>';
        }
        unset($_SESSION['message']);
        ?>
    </form>

</body>
</html>