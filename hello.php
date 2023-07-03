<?php

$books = [
    [
        "name" => "Think and Grow Rich",
        "author" => "Napoleon Hill",
        "releaseYear" => 2000,
        "purchaseUrl" => "https://www.google.com"
    ],
    [
        "name" => "Rich Dad, Poor Dad",
        "author" => "Rober Kiyosaki",
        "releaseYear" => 2004,
        "purchaseUrl" => "https://www.google.com"
    ],
    [
        "name" => "Dark Matters",
        "author" => "Garry Vee",
        "releaseYear" => 2010,
        "purchaseUrl" => "https://www.google.com"
    ],
];



$filteredBooks = array_filter($books, function ($book) {
    return $book["releaseYear"] >= 2000;
});