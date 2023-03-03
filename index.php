<?php

require 'functions.php';
// require 'router.php';
require 'Database.php';


$db = new Database();
// "select * from posts where id = 1"
$posts = $db->query("select * from posts")->fetchAll(PDO::FETCH_ASSOC);


// dd($posts);

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}
