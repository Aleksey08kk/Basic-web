<?php
$connect = mysqli_connect('localhost', 'root', 'root', 'test');
if (!$connect) {
    die('Нет соединения');
}
