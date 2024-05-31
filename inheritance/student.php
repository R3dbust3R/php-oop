<?php

require_once 'user.php';


class Student extends User {
    /**
     * private property for student class
     */
    private $note;

    /**
     * construction method for new object
     */
    public function __construct($fname, $lname, $email, $age, $note)
    {
        /**
         * pass some properties to the parent class
         */
        parent::__construct($fname, $lname, $email, $age);
        $this->note = $note;
    }

    /**
     * setters and getters methods for this class
     */
    public function get_note() {return $this->note;}
    public function set_note($new_value) {$this->note = $new_value;}


}