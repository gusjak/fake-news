<?php

declare(strict_types=1);

// This is the file where you can keep all your functions. Remember to NOT
// execute/run any functions in this file. Keep it dumb.

/**
 * Date sorting function
 * 
 * @param array $a 
 * @param array $b 
 * @return int
 * 
 */

function sortByDate(array $a, array $b): int
{
    return $a['datePublished'] - $b['datePublished'];
};


function sortByLikes(array $a, array $b): int
{
    return $b['likes'] - $a['likes'];
};
