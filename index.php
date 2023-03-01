<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>

<body>
    <h1>Recommended Books</h1>

    <?php
    $books = [
        [
            'name' => 'Do Androids Dream of Electroc Sheep',
            'author' => 'Philip K. Dick',
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'name' => 'Project Mail Mary',
            'author' => 'Andy Scott',
            'purchaseUrl' => 'http://example.com'
        ]
    ]
    ?>

    <ul>
        <?php foreach ($books as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name']; ?> </a>

            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>