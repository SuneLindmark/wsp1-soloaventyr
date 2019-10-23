<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $pageTitle; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
       <a href="?id=1"><img src="img/HoG.svg" width="500" height="400" class="img-fluid rounded mx-auto d-block" alt="Responsive image"></a>
    <main>
        <p>
            <?= $story['body'] ?>
        </p>

        <ul>
            <?php foreach ($links as $link): ?>
            <li>
                <a href="?id=<?= $link['target_id'] ?>">
                <?= $link['description'] ?>
                </a>
            </li>
            <?php endforeach ?>
        </ul>
    </main>
</body>
</html>