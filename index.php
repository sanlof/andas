<?php require __DIR__ . '/content.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Andningsövningar</title>
    <link rel="stylesheet" href="/style.css" />
</head>

<body>
    <main>
        <?php foreach ($exercises as $exercise => $exerciseData) : ?>
            <section class="<?= $exercise; ?>">
                <h2><?= $exerciseData['title']; ?></h2>
                <div id="<?= $exercise; ?>"></div>
                <p><?= $exerciseData['info']; ?></p>
                <button onClick="window.location.reload();">Starta om</button>
            </section>
        <?php endforeach; ?>
    </main>
</body>

</html>