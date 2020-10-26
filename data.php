<?php

declare(strict_types=1);

// This is the file where you can keep your data arrays such as articles and
// authors.

$authors = [
    [
        'id' => 0,
        'name' => 'Steve Apple',
    ],
    [
        'id' => 1,
        'name' => 'Andy Android',
    ],
    [
        'id' => 2,
        'name' => 'Bill Micro',
    ],
    [
        'id' => 3,
        'name' => 'Mark Zuckersmurg',
    ],
    [
        'id' => 4,
        'name' => 'Joshua Verge',
    ],
];

$newsItems = [
    [
        'image' => 'https://images.unsplash.com/photo-1580868065114-11da5e9401ab?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80',
        'title' => 'Apple will only get better, I believe Android sucks',
        'content' => 'Steve Jobs was a genius, in the beginning gorgeous in spite of battery drain, due to CrackBerry. Siri is better than TellMe and Google Voice put together, when Steve Jobs was a genius, in the end Flash sucks, eventually iPhone rip-offs as a result Apple will only get better generally gorgeous since profit.',
        'author' => $authors[0]['name'],
        'datePublished' => strtotime('20 October 2010'),
        'likes' => 190,
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1560790166-3b36b88098f2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80',
        'title' => 'Jesus pad, during Android is better because it’s open',
        'content' => 'Hypnotised, so that notifications are way better on Android but also marketing, after you suck personally it didn’t even have copy and paste, for instance toys generally moron, such a typical fanboy so as to Android sells more phones.',
        'author' => $authors[1]['name'],
        'datePublished' => strtotime('30 June 2020'),
        'likes' => 49,
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1538370621607-4919ce7889b3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80',
        'title' => 'You can’t upgrade a Mac, no other operating system is better than Windows',
        'content' => 'For instance people will start developing for the new Windows soon, for one thing why shouldn’t the Microsoft store look like the Apple store in the end Retina is just a made-up name. Apple is closed and ossified, approaching petrified, suddenly Macs are too expensive.',
        'author' => $authors[2]['name'],
        'datePublished' => strtotime('08 December 2019'),
        'likes' => 192,
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1568378780196-a9a0444a9151?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80',
        'title' => 'A squirrel dying in front of your house may be more relevant to your interests',
        'content' => 'Yeah so if you ever need info about anyone at Harvard, just ask. I have over 4,000 emails, pictures, addresses, SNS. They "trust me',
        'author' => $authors[3]['name'],
        'datePublished' => strtotime('14 November 2019'),
        'likes' => 92,
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1467007849282-42dad96c2312?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80',
        'title' => 'Could be the best Android phone, finally is might be better than the iPhone',
        'content' => 'It works reasonably well I would say that battery life isn’t great but not too bad either, consequently in short, a great phone, on the whole better than most of its competitors. But generally it feels a little slapdash, in spite that it can’t hold a candle',
        'author' => $authors[4]['name'],
        'datePublished' => strtotime('03 January 2006'),
        'likes' => 422,
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1500301802642-622bee979621?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80',
        'title' => 'BlackBerry, in the beginning delay in getting Ice Cream Sandwich',
        'content' => 'Steve Jobs was a genius once delay in getting Ice Cream Sandwich, in order that so-called “iPad killer” besides Flash sucks after best design, generally gorgeous but Android is fragmented nevertheless profit, what Jony Ive’s incredible design thus profit.',
        'author' => $authors[0]['name'],
        'datePublished' => strtotime('13 March 2014'),
        'likes' => 820,
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1569769107543-e0f61bab8e02?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80',
        'title' => 'Apple didn’t invent anything, all in all cult of Jobs',
        'content' => 'At first cult of Steve consequently professional fanboy, next Flash, because marketing not enough typical fanboy, on the other hand blah, blah, blah, who overpriced such a Google Voice is better than Siri and TellMe put together.',
        'author' => $authors[1]['name'],
        'datePublished' => strtotime('27 July 2012'),
        'likes' => 329,
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1583413230888-c7b03057be03?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80',
        'title' => 'No other operating system is better than Windows',
        'content' => 'Retina is just a made-up Apple name afterwards Windows Phone is beautiful next you can’t upgrade a Mac, so you can’t get Office on an iPad, to sum up you can’t play games on a Mac.',
        'author' => $authors[2]['name'],
        'datePublished' => strtotime('09 January 2017'),
        'likes' => 299,
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1432888622747-4eb9a8efeb07?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80',
        'title' => 'The idea of a single eureka moment is a dangerous lie',
        'content' => 'Giving people a voice on the one hand, and keeping the community and people safe on the other hand. Our bias tends to be to want to give people a voice and let people express a wide range of opinions.',
        'author' => $authors[3]['name'],
        'datePublished' => strtotime('01 January 2018'),
        'likes' => 89,
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1599278217978-8d4ce9d6263e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80',
        'title' => 'Battery life isn’t great but not too bad either afterwards in short.',
        'content' => 'Makes compromises, generally although it is well made, at last suits your needs next on the other hand, while battery life isn’t great but not too bad either immediately better than some but not as good as others so might be better.',
        'author' => $authors[4]['name'],
        'datePublished' => strtotime('19 August 2008'),
        'likes' => 304,
    ],
];
