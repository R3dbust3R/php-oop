<?php

class User {
    /**
     * the main properties for this class
     */
    protected $first_name;
    protected $last_name;
    protected $email;
    protected $age;

    /**
     * construct method to build the object
     */
    public function __construct($fname, $lname, $email, $age)
    {
        $this->first_name   = $fname;
        $this->last_name    = $lname;
        $this->email        = $email;
        $this->age          = $age;
    }

    /**
     * getters methods to fetch the data
     */
    public function get_name() {return $this->first_name . ' ' . $this->last_name;}
    public function get_email() {return $this->email;}
    public function get_age() {return $this->age;}

    /**
     * setters methods to update the data
     */
    public function set_first_name($new_value) {$this->first_name = $new_value;}
    public function set_last_name($new_value) {$this->last_name = $new_value;}
    public function set_email($new_value) {$this->email = $new_value;}
    public function set_age($new_value) {$this->age = $new_value;}

    /**
     * method to print the data
     */
    public function __print_data() {
        echo "<pre>";
        echo 'full name: ' . $this->get_name() . '<br>';
        echo 'email address: ' . $this->get_email() . '<br>';
        echo 'age: ' . $this->get_age() . '<br>';
        echo "</pre>";
    }
}