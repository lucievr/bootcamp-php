This is at the beginning

<?php

phpinfo();

echo 'Hello world!';
?>

This is at the end

<?php echo '<h1>This is headline<span class="sub">Subheadline</span></h1>'; ?>

<h1>
    <?= 'This is headline' ?>
    <span class="sub"><?= 'Subheadline' ?></span>
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