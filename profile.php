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


<form>
    <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
    <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h2>
    <a href="#"><?= $_SESSION['user']['email'] ?></a>
    <a href="logout.php" class="logout">Выход</a>
</form>


</body>
</html>