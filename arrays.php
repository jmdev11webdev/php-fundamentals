<?php

// there are 2 types of array in php that's called numeric and associative arrays
// here is the numeric array
$colors = ['red', 'blue', 'green'];

// here is the associative array where you can also mix types in an array with all of types
$user = [
    'name' => "Juan Miguel",
    'age' => 22,
];

var_dump($colors, $user);
?>

<?php 
// here is a nested arrays
$blogPost = [
    'title' => "Harry Potter",
    'author' => [
        'name' => 'J.k Rowling',
        'role' => 'Writer'
    ],
    'feedback' => [
        [
            'user' => 'Jane',
            'text' => 'Great Book!'
        ],
    ]
];

var_dump($blogPost);
?>

<?php 
// ways on adding and removing an object in arrays (not that much important)
// this is adding
$colors2 = ['red', 'green', 'blue'];
$colors2[] = 'yellow';
$colors2[] = []; // php will still count even it is empty
unset($colors2[2]); // this removes an object from an array

var_dump($colors2);
?>