<?php
session_start();

require_once 'connect.php';

$full_name = $_POST['full_name'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

if($password === $password_confirm){
    $_SESSION['massage'] = 'Всё хорошо!';
    header('location: ../register.php');
}else{
    $_SESSION['massage'] = 'Пароли не совпадают!';
    header('location: ../register.php');
}
