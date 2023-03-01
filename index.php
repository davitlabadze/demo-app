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


$filteredBooks = array_filter($books, function ($book) {
    return $book['relaseYear'] == 2015;
});


require "index.view.php";
