<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= "Новая страница" ?></title>
</head>
<body>
    <?php
        echo "Текущая дата и время";
        echo date(DATE_RSS);
    ?>

    <br>

    <?php
    echo 9
    +
    3
    -
    4;

    echo "Text";

    ?>
    <br>

    <?php
    if(mt_rand(0,1)){
        ?>
        <div style="color: blue">Синий текст</div>
    <?php
    } else {
        ?>
        <div style="color: red">Красный текст</div>
    <?php
    }
    ?>

</body>
</html>