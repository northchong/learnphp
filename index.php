<?php
$name = 'Tõnu';
$fruits = ['Apple', 'Banana', 'Cherry', 'Pear'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hello
        <? $name ?>
    </h1>
    <ul>
        <?php foreach ($fruits as $fruit) : ?>
        <?php if ($fruit != 'Apple') : ?>
            <li>
                <?= $fruit ?>
            </li>
            <?php else : ?>
            <li>
                <i>
                    <? $fruit ?>
                </i>
            </li>
        <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</body>

</html>