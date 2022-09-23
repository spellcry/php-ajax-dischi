<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi PHP</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php
    include __DIR__ . '/../db/dischi.php';
    ?>

    <div id="app">
        <header class="main-header">
            <img src="../assets/spotify_logo.png" alt="">
        </header>
        <main class="main-content">
            <div class="container">
                <ul class="disks-list">
                    <?php
                    foreach ($dischi as $disco) {
                        ?>
                        <li class="col">
                            <div class="card">
                                <img src="<?= $disco['poster'] ?>" alt="" class="card__img">
                                <div class="card__description">
                                    <h4 class="title"><?= $disco['title'] ?></h4>
                                    <div class="author-year">
                                        <p class="author"><?= $disco['author'] ?></p>
                                        <p class="year"><?= $disco['year'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </main>
    </div>
</body>
</html>