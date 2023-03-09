<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserId = 6;

$note = $db->query("SELECT * FROM notes WHERE id = :id", [
    'id' => $_POST['id']
])->findOrFile();

authorize($note['user_id'] === $currentUserId);

$db->query("Delete from notes where id = :id", [
    'id' => $_POST['id']
]);

header('location: /notes');

exit();
