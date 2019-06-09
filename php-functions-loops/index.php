<?php

function get_current_year()
{
    return date('Y');
}

$my_variable = 123;
function foo()
{
    global $my_variable;
}

$first_name = 'Bruce';
$surname = 'Wayne';
$year = 1939;
echo $first_name . ' ' . $surname . ' was first introduced in ' . $year;

function add_two_numbers($first_number, $second_number) 
{
    $result = $first_number + $second_number;
 
    return $result; // the calculated value is returned
}
$foo = add_two_numbers(1, 2);

for ($i = 0; $i < 100; $i++) {
    // this code will run 100 times
}


//ternary operator
$owns_a_car = false;
echo 'He goes to work by ' . ($owns_a_car ? 'car' : 'bicycle');

//short ternary
value_if_true ?: value_if_false;

$username = null;
echo 'Hello' . ($username ?: 'unknown person');

//condition used
$today == 'sunday' OR open_shop(); // if today is sunday, open_shop() will not run

//switch statement
switch (expression) {
    case value_1:
        // code to run when value == value_1
        break; // mandatory
    case value_2:
        // code to run when value == value_2
        break;
    case value_3:
        // code to run when value == value_3
        break;
    default:
        // code to run when none of the previous conditions are true
        break;
}

// typecasting
$foo = (int)'123 Times Square'; // value of foo becomes just 123

$foo = (boolean)1; // foo == true
$foo = (boolean)0; // foo == false
$foo = (boolean)'Not empty string'; // foo == true
$foo = (boolean)''; // foo == false
$foo = (boolean)null; // foo == false
$foo = (boolean)'false'; // foo == true

(integer)12.34; // 12
(boolean)12;    // true
(string)12;     // "12"
(float)12;      // 12.0
