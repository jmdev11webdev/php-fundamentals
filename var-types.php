<?php 

$status1 = 404;
$status2 = "Not Found";
$status3 = true;
$status4 = 3.14;
/* umps the status inside the variable
it will determine what type of variable it is and its value */
var_dump($status1, $status2, $status3, $status4);
?>

<?php 

// we can also use put another (or better yet COMBINE) variables inside a variables value:
$color1 = "red";
$color2 = "blue";

$car1 = "My car is $color1";

// another example is like this
$car2 = "My car is " . $color2;

var_dump($car1, $car2);
?> 

<?php
// here is an example of a casting operator where we can turn a value into a different type of variable
$number1 = (int) "500"; // this will turn the string into an integer
$number2 = (string) 500; // this will turn the integer into a string

$string1 = (string) true; // this will turn the boolean into a string
$string2 = (string) false; // this will turn the boolean into a string

$bool1 = (int) true; // this will turn the boolean into an integer
$bool2 = (int) false; // this will turn the boolean into an integer

var_dump($number1, $number2, $string1, $string2, $bool1, $bool2);

// here is an example where we can have a mathematical expression in a variable even by using a string as a number
$math1 = "500" + 1; // this will turn the string into an integer and add 1 to it
$math2 = "500" - 1; // this will turn the string into an integer and subtract 1 from it
$math3 = "500" * 2; // this will turn the string into an integer and multiply it by 2
$math4 = "500" / 2; // this will turn the string into an integer and divide it by 2

var_dump($math1, $math2, $math3, $math4);

/* reminder that web using a string as a number is not a good practice and should be avoided if possible
using also a . can also be used to concatenate strings together, but it will not work with numbers and will just 
turn them into strings and concatenate them together */
?>