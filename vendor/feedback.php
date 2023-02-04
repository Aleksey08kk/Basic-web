<?php



$name = $_POST['name'];
$multiline = $_POST['multiline'];
$name = htmlspecialchars($name);
$multiline = htmlspecialchars($multiline);

$contact = $_POST['contact']; //Сюда запишется результат выбора. Либо телефон либо почта

if (mail("LialinAleksey08kk@yandex.ru", "Письмо с формы", "$name, $multiline, $contact", "Form: no-reply@mydomain.ru \r\n")) {
    echo('Данные успешно отправлены!');
} else {
    echo('Где то ошибка...');
}
