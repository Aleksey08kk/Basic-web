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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Практическое задание номер 1. Окно пользователя.">
    <link rel="stylesheet" href="profile.css">
    <title>Профайл</title>
</head>
<body>


<div class="infoProfile">
    <img class="imgAvatar" src="<?= $_SESSION['user']['avatar'] ?>" alt="avatar">
    <h1 class="infoUnderAvatar"><?= $_SESSION['user']['full_name'] ?></h1>
    <span class="infoUnderAvatar"><?= $_SESSION['user']['email'] ?></span><br>
    <a class="infoUnderAvatar" href="logout.php" class="logout">Выход</a>
</div>

<form class="form" action="backEndPhp/feedback.php" method="post">
    <img class="labelPlaneta" src="https://i.gifer.com/gzZ.gif" alt="CosmonaftGIF">
    <label class="labelBackCall">Заявка на обратный звонок</label>
    <input class="input" type="text" name="name" placeholder="Текстовое поле" required/>
    <textarea class="input" type="text" name="multiline" placeholder="Многострочное текстовое поле"></textarea>

    <label class="label">Радио кнопки:</label>
    <div class="wrapRadioAndText"><input class="radioText" type="radio" name="radio" value="1" checked/> Первая кнопка
    </div>
    <div class="wrapRadioAndText"><input class="radioText" type="radio" name="radio" value="2"/> Вторая кнопка</div>

    <label class="label">Флажки:</label>
    <span class="wrapRadioAndText"><input class="radioText" type="checkbox" name="flag[]"
                                          value="1"/> Первый флажок</span>
    <span class="wrapRadioAndText"><input class="radioText" type="checkbox" name="flag[]"
                                          value="2"/> Второй флажок</span>
    <span class="wrapRadioAndText"><input class="radioText" type="checkbox" name="flag[]"
                                          value="3"/> Третий флажок</span>

    <label class="label">Выпадающий список:</label>
    <select class="input" name="country">
        <option value="Австралия">Австралия</option>
        <option value="Австрия">Австрия</option>
        <option value="Азербайджан">Азербайджан</option>
        <option value="Албания">Албания</option>
        <option value="Алжир">Алжир</option>
    </select>

    <input class="buttonCleanInputs" type="reset" value="Сброс по умолчанию">

    <button class="button" type="submit">Отправить данные</button>
</form>

</body>
</html>