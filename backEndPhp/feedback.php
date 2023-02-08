<?php

/*----------------------------------------Обработка полей ввода-------------------------------------------------------*/

$name = $_POST['name'];
$multiline = $_POST['multiline'];
$name = htmlspecialchars($name);
$multiline = htmlspecialchars($multiline);

/*----------------------------------------Обработка радио кнопок------------------------------------------------------*/

$radio = $_POST['radio']; //Результат радиокнопки. Сюда запишется результат выбора.

/*----------------------------------------Обработка флажков-----------------------------------------------------------*/

$flags = $_POST['flag'];
if(empty($flags)){
    echo("Вы ничего не выбрали.");
}else{
    $N = count($flags);
    echo("Выбрано заданий: $N. ");
    for($i=0; $i < $N; $i++){
        echo($flags[$i] . ", ");
    }
}

/*----------------------------------------Обработка выпадающего списка------------------------------------------------*/

$country = $_POST['country'];

/*----------------------------------------Отправляем письмо на почту--------------------------------------------------*/

if (mail("lialinaleksey08kk@yandex.ru", "Письмо с формы", 
         "$name, $multiline, $radio, $flags,$country", 
         "Form: no-reply@mydomain.ru \r\n")){
    echo('Данные успешно отправлены!');
} else {
    echo('Где то ошибка...');
}
