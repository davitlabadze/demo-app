<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>

<body>
    <?php
    $name = "Dark Matter";
    $read = false;

    if ($read) {
        $message = "you have read $name";
    } else {
        $message = "you have not read $name";
    }
    ?>
    <h1>
        You have read "<?php echo $name; ?>"
        <?php echo $message; ?>
        <?= $message ?>
    </h1>
</body>

</html>