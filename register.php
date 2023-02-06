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
    <meta name="description" content="Практическое задание номер 1. Окно регистрации.">
    <link rel="stylesheet" href="register.css">
    <title>Регистрация</title>
</head>
<body>

    <form class="form" action="backEndPhp/signup.php" method="post" enctype="multipart/form-data">
        <img class="labelСosmonaft" src="https://i.gifer.com/TFSQ.gif" alt="CosmonaftGIF">
        <input class="input" type="text" name="full_name" placeholder="Введите имя">
        <input class="input" type="email" name="email" placeholder="Введите email. Он же логин">
        <input class="input" type="password" name="password" placeholder="Введите пароль">
        <input class="input" type="password" name="password_confirm" placeholder="Введите пароль еще раз">
        <input class="input" type="file" name="avatar">
        <button class="buttonAuthorization" type="submit">Зарегистрироваться</button>
        <a class="labelAuthorization" href="index.php">Авторизация</a>

        <?php
        if ($_SESSION['message']) {
            echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
        }
        unset($_SESSION['message']);
        ?>
    </form>

</body>
</html>