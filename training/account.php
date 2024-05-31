<?php

class Account {
    private $balance;
    private $account_id;
    private static $last_id = 0;

    const _bonus_rate = 6;
    const _withdraw = 5;  

    public function get_balance() {
        return $this->balance;
    }

    public function __construct($balance = null)
    {
        $this->account_id = static::$last_id + 1;
        static::$last_id += 1;

        if (! is_null($balance)) {
            $this->balance = $balance;
        } else {
            $this->balance = null;
        }
    }

    public function __print_balance() {
        echo 'The current balance: ' . $this->balance;
    }

    public function get_id() {return $this->account_id;}

    public function calculate_bonus() {
        return $this->balance * static::_bonus_rate / 100;
    }

    public function apply_bonus() {
        echo '<br>';
        echo static::_bonus_rate . '% bonus added! [' . $this->calculate_bonus() . ']';
        echo '<br>';
        $this->balance += $this->calculate_bonus();
    }

    public function withdaw($value) {
        if ($value <= $this->balance) {
            echo '<br>Balance before withdaw: ' . $this->balance;
            $this->balance -= $value;
            $this->balance -= static::_withdraw;
            echo '<br>Withdaw ammount: -' . $value . '';
            echo '<br>Fees ammount: -' . static::_withdraw . ' fees<br>';
            echo 'Balance after withdaw: ' . $this->balance;
        } else {
            echo '<br>[!] You cannot withdaw ' . $value . ', Your current balance is: ' . $this->balance;

        }
    }

    public function deposit($value) {
        $this->balance += $value;
        echo '<br>' . $value . ' added to you balance!';
    }

}

