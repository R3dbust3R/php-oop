<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    body {
        padding: 12px;
        font-family: monospace, Courier, 'Courier New';
        background-color: #202122;
        color: white;
    }
</style>
<?php


// require_once 'classes/user.php';
// $user1 = new user('otmane', 'otmane.ki98@email.com', 26, ['programing', 'gaming', 'reading', 'watching animes']);




// require_once 'classes/circle.php';

// $circle_1 = new circle(9);
// $circle_1->__get_data_string();

// $circle_2 = new circle(42.4);
// $circle_2->__get_data_string();

// $circle_3 = new circle(3);
// $circle_3->__get_data_string();

// echo circle::get_pi();
// echo circle::get_zero();




// require_once 'inheritance/student.php';

// $otmane = new Student('otmane', 'talhaoui', 'otmane@gmail.com', 26, 16);

// echo $otmane->get_note();
// echo $otmane->set_note(45);
// echo $otmane->get_note();

// echo $otmane->get_name();
// echo $otmane->set_first_name('zakaria');
// echo $otmane->get_name();





// require_once '2-level-inheritance/tacoma.php';

// $car_1 = new Tacoma('Toyota Tacoma TRD', 4, 'red')
// $car_1 = new Tacoma('toyota tacoma trd', 4, 'black', 42_000);

// $car_1->__print_info();

// echo $car_1->get_color();

// echo $car_1->get_name();
// echo $car_1->set_name('toyota tacoma sr5');
// echo $car_1->get_name();




// require_once 'polymorphism/ceo.php';

// // $emp_1 = new Employee('hassan chaouali', 'hassan9129@gmail.com', 32, 8300);
// // $emp_2 = new Ceo('otmane talhaoui', 'otmane.ki98@gmail.com', 26, 28000);

// // $emp_1->__print_data();
// // $emp_2->__print_data();

// $amine = new Employee('amine elbaqqali', 'amine22@gmail.com', 32, 8_700);
// $amine->__print_data();

// $otmane = new Ceo('otmane talhaoui', 'otmane.ki98@gmail.com', 26, 9_200);
// $otmane->__print_data();




// require_once 'trait/calculate.php';

// $calc_1 = new Calculate();

// echo $calc_1->calculate_addition(10,3);
// echo $calc_1->calculate_substraction(10,3);
// echo $calc_1->calculate_division(10,3);
// echo $calc_1->calculate_multiplication(10,3);



require_once 'training/account.php';

$otmane = new Account(1000);
echo $otmane->get_id();

$hassan = new Account(200);
echo '<br>' . $hassan->get_id();

$amine = new Account();
echo '<br>' . $amine->get_id();