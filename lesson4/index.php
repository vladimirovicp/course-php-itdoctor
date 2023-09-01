<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lesson4</title>
</head>
<body>

<h1>Подключение файла</h1>

<?php
    echo 'Главный скрипт <br>';

    include 'second.php';

    echo '<br>';

    require 'second.php';

    echo 'Главный скрипт <br>';
?>

</body>
</html>