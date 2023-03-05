<?php


$config = require('config.php');

$db = new Database($config['database']);

$heading = 'Note';
$currentUserId = 6;


$note = $db->query("SELECT * FROM notes WHERE id = :id", [
    'id' => $_GET['id']
])->findOrFile();

authorize($note['user_id'] === $currentUserId);


require "views/notes/show.view.php";
