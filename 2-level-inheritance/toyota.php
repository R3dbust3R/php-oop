<?php

require_once 'car.php';

class Toyota extends Car {
    protected $color;

    public function __construct(string $name, int $age, string $color)
    {
        parent::__construct($name, $age);
        $this->color = $color;
    }

    public function get_color() { return $this->color; }
    public function set_color($color) { $this->color = $color; }

}