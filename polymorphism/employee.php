<?php

class Employee {
    /**
     * the main properties for this class
     */
    protected $name;
    protected $email;
    protected $age;
    protected $salary;

    /**
     * construction method for any object
     */
    public function __construct(string $name, string $email, int $age, int $salary)
    {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
        $this->salary = $salary;
    }
    
    /**
     * getters methods for this class
     */
    public function get_name() { return $this->name; }
    public function get_email() { return $this->email; }
    public function get_age() { return $this->age; }
    public function get_salary() { return $this->salary; }
    
    /**
     * setters methods for this class
     */
    public function set_name($new_value) { $this->name = $new_value; }
    public function set_email($new_value) { $this->email = $new_value; }
    public function set_age($new_value) { $this->age = $new_value; }
    public function set_salary($new_value) { $this->salary = $new_value; }



    /**
     * this method will be edited on Ceo Class
     */
    public function get_bonus_rate() {return 25;}
    
    public function calculate_bonus() {
        return $this->salary * $this->get_bonus_rate() / 100;
    }

    /**
     * other methods for this class
     */
    public function get_username() {
        return explode('@', $this->email)[0];
    }
    public function __print_data() {
        echo '<pre>';
        echo 'Name: ' . $this->name . '<br>';
        echo 'Email: ' . $this->email . '<br>';
        echo 'Username: ' . $this->get_username() . '<br>';
        echo 'Age: ' . $this->age . '<br>';
        echo 'Salary: ' . $this->salary . '<br>';
        echo 'Bonus: ' . $this->calculate_bonus() . '<br>';
        echo 'Bonus Rate: ' . $this->get_bonus_rate() . '%<br>';
        echo 'Total Salary: ' . ($this->calculate_bonus() + $this->salary) . '<br>';
        echo '</pre>';
    }

}