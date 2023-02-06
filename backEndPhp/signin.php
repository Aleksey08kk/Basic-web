<?php
session_start();

$connect = $connect = mysqli_connect('localhost', 'root', 'root', 'test');

$email = $_POST['email'];
$password = md5($_POST['password']);

$checkUser = mysqli_query($connect, "SELECT * FROM `test` WHERE `email` = '$email' AND `password` = '$password'");

if(mysqli_num_rows($checkUser) > 0){
    $user = mysqli_fetch_assoc($checkUser);
    $_SESSION['user'] = [
        "id" => $user['id'],
        "full_name" => $user['full_name'],
        "avatar" => $user['avatar'],
        "email" => $user['email']
    ];

    header('Location: ../profile.php');

}else{
    $_SESSION['message'] = 'Не верный логин или пароль';
    header('Location: ../index.php');
}