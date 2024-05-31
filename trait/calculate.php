<?php

/**
 * this class inherits methods from trait
 */

require_once 'addition_trait.php';
require_once 'multiplication_trait.php';
require_once 'substraction_trait.php';
require_once 'division_trait.php';

class Calculate {
    use 
        Addition_trait, 
        Substraction_trait, 
        Multiplication_trait, 
        Division_trait;
}