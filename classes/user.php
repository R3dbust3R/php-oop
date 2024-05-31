<?php


class user {
    private string $name;
    private string $email;
    private int $age;
    private array $hobbies;

    public function __construct(string $name, string $email, int $age, array $hobbies) 
    {
        $this->name = $name;    
        $this->email = $email;    
        $this->age = $age;    
        $this->hobbies = $hobbies;    
    }

    public function calculate_birth_date() {
        return (int) 2024 - $this->age;
    }

    public function get_username() {
        return (string) explode('@', $this->email)[0];
    }

    public function get_domain_name() {
        return (string) explode('@', $this->email)[1];
    }

    public function get_hobbies() {
        return (string) join(', ', $this->hobbies);
    } 

    public function get_email() {return (string) $this->email;}

    public function set_email($email) {
        $this->email = $email;
    }

}