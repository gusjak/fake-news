<?php

declare(strict_types=1);

// This is the file where you can keep your data arrays such as articles and
// authors.

$authors = [
    [
        'id' => 0,
        'name' => 'Author 1',
    ],
    [
        'id' => 1,
        'name' => 'Author 2',
    ],
    [
        'id' => 2,
        'name' => 'Author 3',
    ],
    [
        'id' => 3,
        'name' => 'Author 4',
    ],
    [
        'id' => 4,
        'name' => 'Author 5',
    ],
];

$newsItems = [
    [
        'title' => 'Title 1',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet earum placeat praesentium maxime ipsum amet? Voluptas dolores voluptates ratione quae.',
        'author' => $authors[0]['name'],
        'datePublished' => strtotime('20 October 2010'),
        'likes' => 190,
    ],
    [
        'title' => 'Title 2',
        'content' => 'Voluptas dolores voluptates ratione quae. Lorem ipsum dolor sit amet.',
        'author' => $authors[1]['name'],
        'datePublished' => strtotime('30 June 2020'),
        'likes' => 28,
    ],
    [
        'title' => 'Title 3',
        'content' => 'Voluptas dolores voluptates ratione quae. Lorem ipsum dolor sit amet.',
        'author' => $authors[2]['name'],
        'datePublished' => strtotime('08 December 2019'),
        'likes' => 120,
    ],
    [
        'title' => 'Title 4',
        'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et voluptates mollitia ipsam beatae corporis deleniti minus, ducimus nisi in libero consectetur alias ad sit culpa voluptas iste consequuntur! Libero, quisquam?',
        'author' => $authors[3]['name'],
        'datePublished' => strtotime('14 November 2019'),
        'likes' => 92,
    ],
    [
        'title' => 'Title 5',
        'content' => 'Voluptatem alias neque, dolores, doloremque ut corporis eligendi non voluptate, repellendus officia quidem cum?',
        'author' => $authors[4]['name'],
        'datePublished' => strtotime('03 January 2006'),
        'likes' => 304,
    ],
    [
        'title' => 'Title 6',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet earum placeat praesentium maxime ipsum amet? Voluptas dolores voluptates ratione quae.',
        'author' => $authors[0]['name'],
        'datePublished' => strtotime('13 March 2014'),
        'likes' => 190,
    ],
    [
        'title' => 'Title 7',
        'content' => 'Voluptas dolores voluptates ratione quae. Lorem ipsum dolor sit amet.',
        'author' => $authors[1]['name'],
        'datePublished' => strtotime('27 July 2012'),
        'likes' => 28,
    ],
    [
        'title' => 'Title 8',
        'content' => 'Voluptas dolores voluptates ratione quae. Lorem ipsum dolor sit amet.',
        'author' => $authors[2]['name'],
        'datePublished' => strtotime('09 January 2017'),
        'likes' => 120,
    ],
    [
        'title' => 'Title 9',
        'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et voluptates mollitia ipsam beatae corporis deleniti minus, ducimus nisi in libero consectetur alias ad sit culpa voluptas iste consequuntur! Libero, quisquam?',
        'author' => $authors[3]['name'],
        'datePublished' => strtotime('01 January 2018'),
        'likes' => 92,
    ],
    [
        'title' => 'Title 10',
        'content' => 'Voluptatem alias neque, dolores, doloremque ut corporis eligendi non voluptate, repellendus officia quidem cum?',
        'author' => $authors[4]['name'],
        'datePublished' => strtotime('19 August 2008'),
        'likes' => 304,
    ],
];

// die(var_dump($authors));

// die(var_dump($newsItems));

echo $newsItems[0]['title'] . ' - ' . date("d/m-Y", $newsItems[0]['datePublished']) . "\n";
echo $newsItems[1]['title'] . ' - ' . date("d/m-Y", $newsItems[1]['datePublished']) . "\n";
echo $newsItems[2]['title'] . ' - ' . date("d/m-Y", $newsItems[2]['datePublished']) . "\n";
echo $newsItems[3]['title'] . ' - ' . date("d/m-Y", $newsItems[3]['datePublished']) . "\n";
echo $newsItems[4]['title'] . ' - ' . date("d/m-Y", $newsItems[4]['datePublished']) . "\n";
echo $newsItems[5]['title'] . ' - ' . date("d/m-Y", $newsItems[5]['datePublished']) . "\n";
echo $newsItems[6]['title'] . ' - ' . date("d/m-Y", $newsItems[6]['datePublished']) . "\n";
echo $newsItems[7]['title'] . ' - ' . date("d/m-Y", $newsItems[7]['datePublished']) . "\n";
echo $newsItems[8]['title'] . ' - ' . date("d/m-Y", $newsItems[8]['datePublished']) . "\n";
echo $newsItems[9]['title'] . ' - ' . date("d/m-Y", $newsItems[9]['datePublished']) . "\n";

echo "\n";

foreach ($newsItems as $newsItem) {
    echo $newsItem['title'] . "\n";
    echo $newsItem['content'] . "\n";
    echo $newsItem['author'] . "\n";
    echo 'Published: ' . date("d/m-Y", $newsItem['datePublished']) . ' - ' . $newsItem['likes'] . ' likes ' . "\n";
    echo "\n";
}
