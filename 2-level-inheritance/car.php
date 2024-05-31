<?php


class Car {
    protected $name;
    protected $age;
    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age  = $age;
    }

    public function get_name() {return (string) $this->name;}
    public function get_age() {return (int) $this->age;}
    
    public function set_name($name) {$this->name = $name;}
    public function set_age($age) {$this->age = $age;}
}