<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi PHP</title>
</head>
<body>
    <?php
    include __DIR__ . '/../db/dischi.php';
    ?>

    <ul>
        <?php
        foreach ($dischi as $disco) {
            ?>
            <li>
                <?= "{$disco['title']}<br>{$disco['author']}<br>{$disco['genre']}<br>{$disco['year']}<br>{$disco['poster']}" ?>
            </li>
            <?php
        }
        ?>
    </ul>
</body>
</html>