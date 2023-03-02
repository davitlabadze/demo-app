<?php

require 'functions.php';
// require 'router.php';


// Connect to our MYSQL database.
//charset=utf8nb4;
$dsn = "mysql:host=localhost;post=3306;dbname=demoapp;user=root;password=root;";

$pdo = new PDO($dsn);

$statment = $pdo->prepare("select * from posts");


$statment->execute();

$posts = $statment->fetchAll(PDO::FETCH_ASSOC);

// dd($posts);

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}
