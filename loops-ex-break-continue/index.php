<?php

// while loop
echo '<hr>';
$time_served = 0;
while ($time_served < 10) {
    $time_served++;
    echo "The prisoner has served {$time_served} years<br>";
}
// do .. while loop
echo '<hr>';
$time_served = 0;
do {
    $time_served++;
    echo "The prisoner has served {$time_served} years<br>";
} while ($time_served < 10);
// for loop
echo '<hr>';
for ($i = 0; $i < 5; $i++) {
    $years_left = 5 - $i;
    
    echo "The prisoner has {$years_left} more years to serve<br>";
}
// continue & break
echo '<hr>';
for ($i = 10; $i > 0; $i--) {
    echo "The prisoner has {$i} more years to serve.<br>";
    if ($i > 5) {
        continue;
    }
    echo 'Going to a parole hearing...<br>';
    if ($i == 2) {
        echo 'Paroled!';
        break;
    }
}
//days to christmas
$days_to_christmas = 0;
while ($days_to_christmas > 0) {
    $days_to_christmas--;
    echo "There are still {$days_to_christmas} days to christmas<br>";
}
do {
    $days_to_christmas--;
    echo "There are still {$days_to_christmas} days to christmas<br>";
} while ($days_to_christmas > 0);
for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
        break;
    }
    echo "This is the ".($i+1).". iteration of the loop<br>";
}
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        echo "This is the ".($i+1).". iteration of the outer loop and the ".($j+1).". iteration of the inner loop<br>";
        if ($j == 5) {
            break 2;
        }
    }
}