<?php

class circle {
    /**
     * private properties, you cannot access them outside this class
     */
    private $radius;
    private $diameter;
    private $circumference;
    private $area;

    /**
     * this is a static property, 
     * you can access it with static::$property_name
     */
    private static $_PI = 3.141592653589793;
    
    /**
     * constate value cannot be edited
     */
    const ZERO = 0;
    
    /**
     * this method invokes after object creation
     */
    public function __construct($radius) {
        $this->radius = $radius;
        $this->diameter = $this->radius * 2;
        $this->circumference = $this->radius * (2 * static::$_PI);
        $this->area = ($this->radius ** 2) * static::$_PI;

    }
    
    /**
     * getters and setters methods, you can use them 
     * to fetch or update object properties
     */
    public function get_radius() {return $this->radius;}
    public function get_diameter() {return $this->diameter;}
    public function get_circumference() {return $this->circumference;}
    public function get_area() {return $this->area;}

    /**
     * public method to fetch properties data as a string
     */
    public function __get_data_string() {
        echo '<pre>>> Radius        = ' . $this->get_radius() . 'cm<br>';
        echo '>> Diameter      = ' . $this->get_diameter() . 'cm<br>';
        echo '>> Circumference = ' . $this->get_circumference() . 'cm<br>';
        echo '>> Area          = ' . $this->get_area() . 'cm2<br></pre>';
    }

    /** 
     * this is a statis method,
     * you can use it like this:
     * class_name::method_name() // method #01
     * obj_name::method_name() // method #02
     */
     public static function get_pi() { return static::$_PI; }

     /**
      * how to use a constante property
      */
     public static function get_zero() { return static::ZERO; }

     /**
      * 
      */
    
}   