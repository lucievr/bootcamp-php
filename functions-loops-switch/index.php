//conditions and loops
<?php if ($condition == true) : ?>
    <p>
        My <strong>HTML</strong> code.
    </p>
<?php endif; ?>

<?php endif; ?>
<?php endwhile; ?>
<?php endfor; ?>
<?php endforeach; ?>

<?php if (true) : ?>
<?php elseif : ?>
<?php endif; ?>

<?php for ($i = 0; $i < 10; $i++) : ?>
    <div>
        This is item <?php echo $i+1; ?> of 10
    </div>
<?php endfor; ?>

<?php if ($gender == 'male') : ?>
<h1>Hello, mister</h1>
<ul class="foo">
    <?php for ($i = 0; $i < 100; $i++) : ?>

        <li><?= $i ?></li>

    <?php endfor; ?>
</ul>
<?php elseif ($gender == 'female') : ?>
<h1>Hello, madam</h1>
<?php endif; ?>

<?php
        // is the current user administrator?
        $user_is_admin = true;
    ?>
    <ul class="menu">
        <li><a href="#">Home</a></li>
        <li><a href="#">Eshop</a></li>
        <li><a href="#">Contact</a></li>

        <?php if ($user_is_admin) : ?>
            <li><a href="#">Link just for administrators</a></li>
            <li><a href="#">Another link just for administrators</a></li>
        <?php endif; ?>
    </ul>

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

//pass by reference I
function add_item(&$array, $item)
{
    $array[] = $item;
}
$item = 'abc';
add_item($array, $item);
var_dump($array); // [0 => 'abc']
 
add_item($array, 'def');
var_dump($array); // [0 => 'abc', 1 => 'def']

//pass by reference II
function my_function(&$bar) 
{
    // $bar is a reference to the variable the function is called with
    $bar++;
}
$foo = 1;           // $foo is 1
my_function($foo);  // $foo is 2


function element($element, $innerhtml = '', $attributes = '')
{
    return "<{$element} {$attributes}>{$innerhtml}</{$element}>";
}
echo element('p').'<br>';                           // <p></p>
echo element('p', 'some text').'<br>';              // <p>some text</p>
echo element('p', 'some text', 'class="foo"').'<br>'; // <p class="foo">some text</p>

function convert_weight($value, $unit = 'kg')
{
    return $unit == 'kg' ? $value * 2.20462262 : $value / 2.20462262;
}
echo convert_weight(1, 'lb').'<br>'; // 0.45359237 - converted 1 lb to kilograms
echo convert_weight(1, 'kg').'<br>'; // 2.20462262 - converted 1 kg to lbs
echo convert_weight(1).'<br>';       // 2.20462262 - used default unit kg, converted 1 kg to lbs

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

$gender = 'man';
switch ($gender) {
    case 'man':
    case 'male':
        echo 'You are a male';
        break;
    case 'woman':
    case 'girl':
    case 'female':
        echo 'You are a female';
        break;
    case 'undecided':
    default: 
        echo 'You are something else';
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
