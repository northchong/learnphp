<?php
$name = 'Tõnu';
$fruits = ['Apple', 'Banana', 'Cherry', 'Pear'];
?>
<body>
    <?php include ('./views/partials/nav.php'); ?>
    <h1>Hello
        <?=$name ?>
    </h1>
    <ul>
        <?php foreach ($fruits as $fruit) : ?>
        <?php if ($fruit != 'Apple') : ?>
            <li>
                <?=$fruit?>
            </li>
            <?php else : ?>
            <li>
                <i>
                    <?=$fruit ?>
                </i>
            </li>
        <?php endif; ?>
        <?php endforeach; ?>
    </ul>