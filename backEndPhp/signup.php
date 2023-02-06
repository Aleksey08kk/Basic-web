<?php
session_start();
//require_once 'connect.php';   не работает почему то. объявляю переменную на каждой странице заново

/*--------------------------------------Получаем данные из полей ввода------------------------------------------------*/

$full_name = $_POST['full_name'];
$login = $_POST['login'];
$email = strtolower($_POST['email']);
$password = strtolower($_POST['password']);
$password_confirm = $_POST['password_confirm'];

/*----------------------------------------Сохраняем все в базу данных-------------------------------------------------*/
if ($password === $password_confirm) {
    $path = 'uploads/' . time() . $_FILES['avatar']['name']; //записали путь сохранения аватарки

    if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)){ //если не загружается то сообщение об ошибке
        $_SESSION['message'] = 'Ошибка при загрузке сообщения';
        header('Location: ../register.php');
    }

    $password = md5($password); //md5 делает строку нечитаемой. в этом случае пароль. при сохрании в БД. Ввели 12345 а бд сохранила 827ccb0eea8a706c4c34a16891f84e7b

    $connect = mysqli_connect('localhost', 'root', 'root', 'test'); //require_once 'connect.php'; не работает. создал подключение к бд так.
    mysqli_query($connect, "INSERT INTO `test` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$full_name', '$login', '$email', '$password', '$path')");  // запись в бд

    $_SESSION['message'] = 'Регистрация прошла успешно!';
    header('Location: ../index.php');

} else {
    $_SESSION['message'] = 'Пароли не совпадают';
    header('Location: ../register.php');
}

