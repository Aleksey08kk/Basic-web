<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css">
    <title>Авторизация</title>
</head>
<body>

    <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
        <label>ФИО</label>
        <input type="text" name="full_name" placeholder="Введите ФИО">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите логин">
        <label>email</label>
        <input type="email" name="email" placeholder="Введите email">
        <label>Аватар</label>
        <input type="file" name="avatar">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <label>Подтвердить пароль</label>
        <input type="password" name="password_confirm" placeholder="Введите пароль еще раз">
        <button>Войти</button>
        <p>У вас уже есть аккаунт - <a href="index.php">авторезируйтесь</a></p>
    </form>

</body>
</html>