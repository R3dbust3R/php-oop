<?php


require_once 'employee.php';

class Ceo extends Employee {
    /**
     * override this method for this class, 
     * this sis what we call polymorphism 
     */
    public function get_bonus_rate()
    {
        return 34;
    }
}