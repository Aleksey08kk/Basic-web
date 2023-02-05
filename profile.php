<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css">
    <title>Профайл</title>
</head>
<body>


<div class="infoProfile">
    <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
    <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h2>
    <a href="#"><?= $_SESSION['user']['email'] ?></a>
    <a href="logout.php" class="logout">Выход</a>
</div>

<form action="vendor/feedback.php" method="post" class="feedbackForm">
    <label class="label">Заявка на обратный звонок</label>
    <input class="input" type="text" name="name" placeholder="Текстовое поле" required />
    <textarea class="inputMultiline" type="text" name="multiline" placeholder="Многострочное текстовое поле" required></textarea>

    <label class="labelRadio">Предпочтительный способ связи</label>
    <span class="wrapRadioAndText"><input class="radioText" type="radio" name="contact" value="email" checked />По email</span>
    <span class="wrapRadioAndText"><input class="radioText" type="radio" name="contact" value="phone" />По телефону</span>

    <label class="labelRadio">Дополнительные услуги:</label>
    <span class="wrapRadioAndText"><input class="radioText" type="checkbox" name="formDoor[]" value="Доставка" />Доставка</span>
    <span class="wrapRadioAndText"><input class="radioText" type="checkbox" name="formDoor[]" value="Сборка" />Сборка</span>
    <span class="wrapRadioAndText"><input class="radioText" type="checkbox" name="formDoor[]" value="Установка" />Установка</span>

    <button class="button" type="submit">Отправить данные</button>
</form>



</body>
</html>