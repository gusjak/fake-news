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

// Sorting function to display the latest article first.
function sortByDateNewest(array $a, array $b): int
{
    return $b['datePublished'] - $a['datePublished'];
};

// Sorting function to display the earliest posted article first. Might use at a later stage.
function sortByDateEarliest(array $a, array $b): int
{
    return $a['datePublished'] - $b['datePublished'];
};

// Sorting function to displayed highest liked article first. Might use at a later stage.
function sortByLikes(array $a, array $b): int
{
    return $b['likes'] - $b['likes'];
};
