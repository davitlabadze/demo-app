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
    //this filter

    // function filter($items, $fn)
    // {
    //     $filterItems = [];

    //     foreach ($items as $item) {
    //         if ($fn($item)) {
    //             $filterItems[] = $item;
    //         }
    //     }
    //     return $filterItems;
    // }

    // $filteredBooks = filter($books, function ($book) {
    //     return $book['relaseYear'] == 2011;
    // });

    //OR

    $filteredBooks = array_filter($books, function ($book) {
        return $book['relaseYear'] == 2011;
    });


    ?>

    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name']; ?> (<?= $book['relaseYear'] ?>) - By <?= $book['author'] ?></a>
            </li>
        <?php endforeach; ?>
    </ul>


</body>

</html>