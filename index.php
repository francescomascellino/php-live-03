<!-- LIVE 3:
Stampare a schermo, attraverso il foreach, tutti gli elementi passati in GET. -->

<?php

var_dump($_GET);

foreach ($_GET as $key => $value) {
    var_dump($key, $value);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>

        <?php foreach ($_GET as $key => $value) : ?>
            <li><?= "$key: $value" ?></li>
        <? endforeach ?>

    </ul>



</body>

</html>