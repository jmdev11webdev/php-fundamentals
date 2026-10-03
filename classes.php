<?php
// classes with function construct
class Product {
    public string $name;
    public int $price;

    public function __construct($name, $price){
        $this->name=$name;
        $this->price=$price;
    }
}

$product = new Product('Lenovo', 50000);
var_dump($product);

// without using function construct, declared variables will be 
?>

<?php
// classes without function construct but already declared the variables' values
class Product2 {
    public string $name2 = 'Lenovo';
    public int $price2 = 1000;

    // public function __construct($name){
    //     $this->name=$name;
    // }
}

$product2 = new Product2();
var_dump($product2);

/* This also works without a constructor because the properties
already have default values.

We don't need to pass arguments when creating the object
because the initial values are already defined in the class. */
?>

<?php
/* there is also a better way of defining properties (inside the constructor) */
class Product3{
    public function __construct(
        public string $name,
        public int $price,
    ) {

    }

    public function hasDiscount (): bool{
        return $this->price < 22500;
    }
}
$product3 = new Product3('Laptop', 25000);
var_dump($product3->hasDiscount());
echo $product3->name;
?>

<?php

class WebApp {
    public function __construct(
        public string $title,
        public int $price,
        ) {

        }

        public function isExpensive(): bool {
            return $this->price > 50000;
        }

        public function getDescription(): string {
            return "{$this->title} costs {$this->price}";
        }
    }

    $ship = new WebApp ('SaaS Laravel Application', 100000);
    var_dump($ship);
    var_dump($ship->isExpensive());
    var_dump($ship->getDescription());
?>

<?php
// with extension using extends (called extended classes)
class WebApp2 {
    public function __construct(
        public string $title2,
        public int $price2,
        ) {

        }

        public function isExpensive2(): bool {
            return $this->price2 > 50000;
        }

        public function getDescription2(): string {
            return "{$this->title2} costs {$this->price2}";
        }
    }

class WebApp3 extends WebApp2 {
    public function getLink(): string {
        return 'get-Link';
    }
}

$ship2 = new WebApp3 ('SaaS Laravel Application', 100000);
    var_dump($ship2);
    var_dump($ship2->getDescription2());
?>