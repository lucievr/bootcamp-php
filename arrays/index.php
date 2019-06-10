<?php

$array = [1, 2, 3];
$array = ['a' => 1, 'b' => 2, 'c' => 3];

$fruit_colors = [
    'Apple' => 'Red',
    'Pear' => 'Green',
    'Orange' => 'Orange'
];

//adding items to array
$fruit['Melon'] = 'Yellow';

// or with numeric key
$fruit[] = "Apple";
$fruit[] = "Orange";

//accessing and updating values

echo $fruit[0]; // Apple
echo $fruit_colors['Pear']; // Green
$fruit_colors['Pear'] = 'Yellow'; // change the value of item with key 'Pear'
 
//foreach

foreach ($fruit as $one_fruit) {
    echo $one_fruit;
}
 
foreach ($fruit_colors as $fruit_name => $fruit_color) {
    echo 'The color of '.$fruit_name.' is '.$fruit_color;
}

//array functions

$array = ['a', 'b', 'c'];
$number = count($array); // number == 3

$array = [3, 1, 2]; // array is unsorted
sort($array);
$array; // [1, 2, 3] - array is sorted now, the unsorted version is lost !

// merging arrays
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);

//values from $array2 with string keys will overwrite values from $array1 with the same keys
//values from $array2 with numeric keys and with string keys that don't exist in $array1 will be appended at the end of $array_1
//numeric keys will be reset, renumbered starting from 0

$movies_per_year = [
    1995 => 2,
    2000 => 3,
    2001 => 0
];
$other_movies_per_year = [
    2002 => 2,
    2005 => 6,
    2019 => 1
];
var_dump($movies_per_year);
var_dump($other_movies_per_year);
$all_movies_per_year = [];
foreach ($movies_per_year as $year => $movies) {
    $all_movies_per_year[$year] = $movies;
}
foreach ($other_movies_per_year as $year => $movies) {
    $all_movies_per_year[$year] = $movies;
}

//array exercise

$movie_name = "Arrival";

$ratings = [
    "user1" => 69,
    "user2" => 95,
    "user3" => 82
];

function format_rating($rating)
{
    return $rating . " %";
}

foreach ($ratings as $rating)
{
    echo format_rating($rating) . "<br>";
}



function get_username($user_id)
{
    $user_names = [
        'user1' => 'Bob',
        'user2' => 'Stuart',
        'user3' => 'Kevin'
    ];
    // remember for test!!!
    return $user_names[$user_id];
}

echo get_username('user1') . "<br>";

foreach ($ratings as $user_id => $rating) {
    echo get_username($user_id) . " gave " . $movie_name . " a rating of " . format_rating($rating) . "<br>";
}


function get_countryname($country_code)
{
    $country_names = [
        'US' => 'USA',
        'HU' => 'Hungary',
        'CZ' => 'Czechia',
        'AR' => 'Argentina',
        'DE' => 'Germany',
        'DK' => 'Denmark',
        'IN' => 'India'
    ];
    return $country_names[$country_code];
}

foreach ($calling_codes as $country_code => $calling_code) {
    echo "The calling code of " . get_countryname($country_code) . " is " . $calling_code . "<br>";
}