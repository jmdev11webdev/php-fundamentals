<?php
// for each loop
$colors = ['red', 'blue', 'green'];

foreach($colors as $key => $color) {
    var_dump($key); // or you can also use $key to show the the numeric array object in a loop
    // you can also replace the word key to any different name (it's still defined as a key even if you change the variable name) you want but it is still a key to determine a variable
}
?>

<?php 

$invoiceItems = [
    ['item' => 'Monitor', 'price' => 1200],
    ['item' => 'Mouse', 'price' => 150],
    ['item' => 'Keyboard', 'price' => 100]
];

$totals = 0; 

foreach($invoiceItems as $item) {
    $totals = $totals + $item['price'];
}

var_dump($totals);
echo $totals;
?>

<?php
// other example
$invoiceItems2 = [
    ['item' => 'Monitor', 'price' => 1200],
    ['item' => 'Mouse', 'price' => 150],
    ['item' => 'Keyboard', 'price' => 100]
];

$totals2 = 0; 

foreach($invoiceItems2 as $item2) {
    $totals2 += $item2['price'];
}

var_dump($totals2);
echo $totals2;
?>

<?php 
// for loop 
for ($i=0; $i < 10 ; $i++) { 
    var_dump($i);
}

?>

<?php 
// while loop
$count = 0;

while ($count <= 10) {
    var_dump($count);
    $count++;
}

?>

<?php
// while loop p.2
$count2 = 10;

while ($count2 >= 0) {
    var_dump($count2);
    $count2--; 
    
    /* 
    without updating the counter variable ($count), it will be an endless loop if its condition 
    remains always true.

    by using the counter variable either addition or subtraction after iteration,
    it will count from number to number either ascending or descending as long as
    the bool argument is true, e.g. 10 >= 0 then $count--;

    vice versa if you will use $count++ on a 0 <= 10 $count++;
    */
}

?>

<?php
// do while loop
$counts = 1000;

do {
    var_dump($counts);
    $counts++;
    // this is run no matter what.
}

while($counts <= 5);

    /* 
    
    in do while loop, doing something (the dump) before it checks the iteration makes
    the loop output be a variable type with the value.

    */
?>

<?php
// other example 
// setting associative boolean array
$users = [
    [
        'name'=>'Matthew', 'with honors'=>true
    ],
    [
        'name'=>'Mark', 'with honors'=>false
    ],
    [
        'name'=>'Luke', 'with honors'=>true
    ]
];

// this checks first the boolean array if true then it will dump data which contains true
foreach($users as $user) {
    // this gets the true bool argument and dumps them
    if ($user['with honors']) {
        var_dump('Give Certificate to' . ' ' . $user['name']);
    } 
    // while this gets the false bool argument
    else if (!$user['with honors']) {
        var_dump('Do not give certificate to' . ' ' . $user['name']);
    }

    /* 
        even without double checking again with an else if... ! statement,
        just by using else, it will check and determine whether the boolean
        object array is false.

        (you don't have to do this) but it's another way but not recommended
        else if (!$user['with honors']) {
        var_dump('Do not give certificate to' . ' ' . $user['name']);
    }

    /* note that even though the if and else if statement have a different conditions,
    foreach still checks each user according to their order in the array.

    for each user, it checks whether 'with honors' is true or false
    and gives the corresponding output.
    */
}
?>

<?php 
// another foreach loop but with continue 
$users2 = [
    [
        'name'=>'Matthew', 'with honors'=>true
    ],
    [
        'name'=>'Mark', 'with honors'=>false
    ],
    [
        'name'=>'Luke', 'with honors'=>true
    ]
];

foreach ($users2 as $user2) {
    // continue loop with negation
    if (!$user2['with honors']) {
        continue;
    } 
    var_dump('Give Certificate to' . ' ' . $user2['name']);
    /* you can also control with the current loop or not, by continuing you can use continue; but 
    in this example, it continues with those who are with honors since the syntax identifies
    with a negation that is not users and remove them.
    */
}
?>

<?php
// another foreach loop but with break 
$users3 = [
    [
        'name'=>'Matthew', 'with honors'=>true
    ],
    [
        'name'=>'Mark', 'with honors'=>false
    ],
    [
        'name'=>'Luke', 'with honors'=>true
    ]
];

foreach ($users3 as $user3) {
    // break loop with negation
    if (!$user3['with honors']) {
        break;
    } 
    var_dump('Give Certificate to' . ' ' . $user3['name']);
    /* with using break, the loop breaks if after a true associative array object is false. 
    by using this, it is for you to control your loop.
    */
}
?>

<?php
// last loop example
$numbers1 = [1, 2, 3, 4, 5];
$doubled = [];

foreach($numbers1 as $numbers) {
    $doubled[]=$numbers*2;
}
?>