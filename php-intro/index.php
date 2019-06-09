This is at the beginning

<?php
phpinfo();
echo 'Hello world!';
?>

This is at the end

<?php echo '<h1>This is headline<span class="sub">Subheadline</span></h1>'; ?>

<h1>
    <?='This is headline'?>
    <span class="sub"><?='Subheadline'?></span>
</h1>

<?php
$number = 123;
function print_number()
{
    // $number = 987;
    // import $number from the global scope (anti-pattern)
    global $number;
    echo $number;
}
print_number();
unset($number);
echo $number;
?>

<?php

define('CITY', 'Prague');
echo CITY;

$my_greeting = 'Hello, world!';
echo $my_greeting;
?>

Something here

<?php
echo $my_greeting;
?>

<?php
// Exercise 1
$first_name = 'Bruce';
$surname = 'Wayne';
?>
First name: <?=$first_name?><br>
Surname: <?=$surname?>

<?php
// Exercise 2
$year_of_birth = 1982;
$height = 186;
?>
Year of birth: <?=$year_of_birth?><br>
Height: <?=$height?>

<?php
// Exercise 3
define('SERVER_SOFTWARE', 'Apache');
?>
This server is running <?=SERVER_SOFTWARE?>

<?php
// Exercise 4
define('MY_OS', 'Windows');
?>
My operating system is <?=MY_OS?>.

<?php
$website_name = 'My website 2';
$text = 'Once upon a time...';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$website_name?></title>
    <style>
h1 {
    color: red;
}
    </style>
</head>
<body>
    <header>
        <h1><?=$website_name?></h1>
        <nav></nav>
    </header>
    <main>
        <?=$text?>
    </main>
</body>
</html>

<!-- concatenation -->
'Hello,' . ' world!'

<!-- variable insertion -->
"Hello, {$name}!"

<!-- debugging -->
var_dump($var);
var_dump($var); die();

<!-- associative arrays -->
[ 'key1' => 'value1', 'key2' => 'value2' ]

foreach($array as $key => $value) {}

array_push($array, $value)
array_pop($array)
array_unshift($array, $value)
array_shift($array)

<!-- accessing object properties & methods -->
$object->property, $object->method()

<!-- accessing class properties & methods -->
class::$property, class::method()