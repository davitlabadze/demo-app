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
        "Do Androids Deam of Electric Sheep",
        "The Langoliers",
        "Mail Mary"
    ]
    ?>

    <ul>
        <li>Do Androids Deam of Electric Sheep</li>
        <li>The Langoliers</li>
        <li>Mail Mary</li>
    </ul>

    <ul>
        <?php foreach ($books as $book) {
            echo "<li>$book</li>";
        }
        ?>
    </ul>
    <ul>
        <?php foreach ($books as $book) : ?>
            <li><?php echo $book; ?></li>

        <?php endforeach; ?>
    </ul>


    <ul>
        <?php foreach ($books as $book) : ?>
            <li><?= $book; ?></li>

        <?php endforeach; ?>
    </ul>
</body>

</html>