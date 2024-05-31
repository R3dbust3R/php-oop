<?php

require_once 'toyota.php';

class Tacoma extends Toyota {
    protected $price;

    public function __construct(string $name, int $age, string $color, int $price)
    {
        parent::__construct($name, $age, $color, $price);
        $this->price = $price;
    }

    public function get_price() { return $this->price; }
    public function set_price($price) { $this->price = $price; }

    public function __print_info() {
        echo '<pre>';
        echo 'Car name: ' . $this->name;
        echo '<br>';
        echo 'Car age: ' . $this->age . ' Years';
        echo '<br>';
        echo 'Car color: ' . $this->color;
        echo '<br>';
        echo 'Car price: $' . $this->price;
        echo '</pre>';
    }
}