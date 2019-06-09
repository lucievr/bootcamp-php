<?php

$my_name = "Lucie";
$height = 1.7;

var_dump($my_name);
var_dump($height);


function headline($text)
{
    return "<h1>{$text}</h1>";
}

echo headline('My website');

$inches = 12;

function inchesToCentimeters($in)
{
    $result = $in * 2.54;
    return $result;
}

echo inchesToCentimeters($inches);
echo "<br>";

$celsius = 100;

function celsiusToFahrenheit($celc)
{
    $output = (9/5) * $celc + 32;
    return $output;
}

echo celsiusToFahrenheit($celsius);
echo "<br>";

$temperature = 36.5;
function isHealthy($temp, $deg)
{
    if($deg == 'f') {
        $temper = ($temp - 32) * 5/9;
        return $temper;
        if($temper < 37) {
            return "true";
        } else {
            return "false";
        }
    } else {
        if($temp < 37) {
            return "true";
        } else {
            return "false";
        }
    }
}

echo isHealthy($temperature, 'c');
echo "<br>";

$number = 42;
function evenOrOdd($num)
{
    return ($num % 2 == 0) ? "even" : "false";
}

echo evenOrOdd($number);
echo "<br>";

$weekday = "Tuesday";

function sayWeekday($name_day)
{
    echo "Today is " . $name_day;
}

sayWeekday($weekday);
echo "<br>";

$year_of_birth = 1990;
function sayBirthday($yob)
{
    $this_year = date('Y');
    $birthday = $this_year - $yob;
    return "I was born in " . $yob . " so this year I am celebrating my " . $birthday . "th birthday.";
}

echo sayBirthday($year_of_birth);
echo "<br>";

function assessHeight($heightcm)
{
    if($heightcm >= 180) {
        return "tall";
    } elseif($heightcm < 180 && $heightcm >= 160) {
        return "average";
    } elseif($heightcm < 160) {
        return "small";
    }
}

echo assessHeight(170);
echo "<br>";

function getLanguageUsage($prog_lang)
{   
    $prog_lang = strtolower($prog_lang);
    switch($prog_lang) {
        case 'php':
        case 'python':
        case 'ruby':
            return "serverside";
        break;
        case 'javascript':
            return 'clientside';
        default:
            return "i don\'t know";
        break;     
    }
}

echo getLanguageUsage('php');
echo "<br>";
echo getLanguageUsage('JavaScript');
echo "<br>";

// if($age < 25) {

// }

// if($employed) {

// }

// if($age > 34 && !$employed) {

// }

// if($age <= 18) {

// }

// if($age < 12 && $gender == "female") {

// }

// if($age >= 18 && !$employed) {

// }

// if($age >= 60 && $employed && $gender == "female") {

// }

// if(($gender == "male" && $age > 20) || ($gender == "female" && !$employed && $age > 25 )){

// }


?>


