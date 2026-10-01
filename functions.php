<?php
// this is a function without parameters
function greet() {
    echo 'hello!';
}

greet();
?>

<?php
// this is a function with parameters
function greeting($name){
    echo "welcome, $name";
}

greeting('Juan Miguel');

?>

<?php 
// another function with parameters with basic mathematics
function addition($number1, $number2) {
    return $number1 + $number2;
}

echo addition(1, 5);
?>