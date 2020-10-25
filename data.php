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
        'image' => 'https://images.unsplash.com/photo-1533422902779-aff35862e462?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80)',
        'title' => 'Title 1',
        'content' => 'Ipsam eaque architecto placeat optio, omnis sunt suscipit, est repellat iure corporis, beatae ea quis iusto voluptas officia? Deserunt culpa dolorum expedita unde quis similique dolorem, laborum accusantium quisquam alias odit, omnis officiis autem aliquid blanditiis possimus fugit. Recusandae odit nemo qui!',
        'author' => $authors[0]['name'],
        'datePublished' => strtotime('20 October 2010'),
        'likes' => 190,
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1533390178274-fe0b47d5e557?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80',
        'title' => 'Title 2',
        'content' => 'Consectetur molestiae similique ducimus atque veritatis minima asperiores labore aliquam, neque sunt quaerat, maxime facere commodi! Asperiores mollitia, unde ratione recusandae obcaecati voluptatibus fuga, et tempore beatae officiis rerum numquam?',
        'author' => $authors[1]['name'],
        'datePublished' => strtotime('30 June 2020'),
        'likes' => 49,
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1576112556258-c60a16415114?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80',
        'title' => 'Title 3',
        'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate exercitationem sunt nemo aperiam, voluptates obcaecati explicabo fuga maiores minima porro error, beatae ex nulla autem quia repudiandae possimus tempora doloribus.',
        'author' => $authors[2]['name'],
        'datePublished' => strtotime('08 December 2019'),
        'likes' => 120,
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1536232059214-d1da6aae256e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80',
        'title' => 'Title 4',
        'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et voluptates mollitia ipsam beatae corporis deleniti minus, ducimus nisi in libero consectetur alias ad sit culpa voluptas iste consequuntur! Libero, quisquam?',
        'author' => $authors[3]['name'],
        'datePublished' => strtotime('14 November 2019'),
        'likes' => 92,
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1519730967915-e1e7d6a82225?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80',
        'title' => 'Title 5',
        'content' => 'Voluptatem alias neque, dolores, doloremque ut corporis eligendi non voluptate, repellendus officia quidem cum?',
        'author' => $authors[4]['name'],
        'datePublished' => strtotime('03 January 2006'),
        'likes' => 422,
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1530958259741-7f273406fdd7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80',
        'title' => 'Title 6',
        'content' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus officia voluptatem fugiat repellat? Accusamus totam alias at odio iure. Incidunt alias dolor illum vel laudantium molestiae, consequuntur nesciunt veritatis autem corrupti nam id, tempore illo!',
        'author' => $authors[0]['name'],
        'datePublished' => strtotime('13 March 2014'),
        'likes' => 172,
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1524634659287-07de7c333bed?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80',
        'title' => 'Title 7',
        'content' => 'Voluptas dolores voluptates ratione quae. Lorem ipsum dolor sit amet.',
        'author' => $authors[1]['name'],
        'datePublished' => strtotime('27 July 2012'),
        'likes' => 37,
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1543107097-ffe418c8d0f0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80',
        'title' => 'Title 8',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia quisquam fuga sapiente! Mollitia aliquid eos, vel magni alias sint commodi dignissimos veritatis! Dolorem, aperiam unde.',
        'author' => $authors[2]['name'],
        'datePublished' => strtotime('09 January 2017'),
        'likes' => 299,
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1597572799720-75ffaed70fda?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80',
        'title' => 'Title 9',
        'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et voluptates mollitia ipsam beatae corporis deleniti minus, ducimus nisi in libero consectetur alias ad sit culpa voluptas iste consequuntur! Libero, quisquam?',
        'author' => $authors[3]['name'],
        'datePublished' => strtotime('01 January 2018'),
        'likes' => 44,
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1568738836391-d15d766832ad?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80',
        'title' => 'Title 10',
        'content' => 'Voluptatem alias neque, dolores, doloremque ut corporis eligendi non voluptate, repellendus officia quidem cum?',
        'author' => $authors[4]['name'],
        'datePublished' => strtotime('19 August 2008'),
        'likes' => 304,
    ],
];
