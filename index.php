<?php

require 'functions.php';
// require 'router.php';
require 'Database.php';


$config = require('config.php');

$db = new Database($config['database']);


// "select * from posts where id = 1"
$posts = $db->query("select * from posts")->fetchAll();


// dd($posts);

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}
