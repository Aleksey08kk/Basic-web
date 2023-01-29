<?php



$connect = mysqli_connect('localhost', 'root', 'root', 'test');

if (!$connect) {
    die('no');
}else{
    print_r('hello');
}

