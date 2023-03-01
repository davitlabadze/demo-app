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
            'relaseYear' => "2015",
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'name' => 'Project Mail Mary',
            'author' => 'Andy Scott',
            'relaseYear' => "2011",
            'purchaseUrl' => 'http://example.com'
        ]
    ];

    function filterByAuthor($books, $author)
    {
        $filterdBooks = [];

        foreach ($books as $book) {
            if ($book['author'] == $author) {
                $filterdBooks[] = $book;
            }
        }
        return $filterdBooks;
    }


    ?>

    <ul>
        <?php foreach (filterByAuthor($books, 'Andy Scott') as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name']; ?> (<?= $book['relaseYear'] ?>) - By <?= $book['author'] ?></a>
            </li>
        <?php endforeach; ?>
    </ul>


</body>

</html>