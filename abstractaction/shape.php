<?php

/**
 * Abstraction is the concept of hiding the complex implementation 
 * details of a system and exposing only the necessary and relevant 
 * parts to the user. It simplifies complex reality by modeling 
 * classes appropriate to the problem, and by working at a 
 * higher level of logic.
 */


abstract class Shape {

    abstract public function circumference();
    abstract public function area();

}