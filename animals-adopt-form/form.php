<?php

require 'lib/DBBlackbox.php';

// handle the incoming request here

var_dump($_GET);
var_dump($_POST);

function get_value_from_request($name_of_input, $default_value = null)
{
    return isset($_POST[$name_of_input]) ? $_POST[$name_of_input] : $default_value;
}
$name =   get_value_from_request('name', '');
$motivation =      isset($_POST['motivation']) ? $_POST['motivation'] : '';
$color =   isset($_POST['color']) ? $_POST['color'] : '1';
$user_wants_express = isset($_POST['express']) && $_POST['express'] == 1;
$express =    isset($_POST['express']) ? $_POST['express'] : '1';
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
var_dump($user_wants_express);
$colors = [
    'b' => 'blue',
    'g' => 'green',
    'y' => 'yellow',
    'x' => 'unknown'
];


// to save any data to the "database":
// insert($any_data);
// $any_data MUST be an array

insert($_POST);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Animals for Adoption</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <style>
        main {
            width: 800px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<h1>Animals for Adoption</h1>
<h3>Adoption Form</h3>
        <form action="" method="post">

            <div class="form-group">
                <label for="name">Name of the adopter</label><br>
                <input 
                    type="text" 
                    name="name" 
                    value="<?= htmlspecialchars($name) ?>" 
                    class="form-control">
            </div>

            <div class="form-group">
                <label for="">Why do you want to adopt a dragon?</label><br>
                <textarea name="motivation" id="" cols="30" rows="10"><?= htmlspecialchars($motivation) ?></textarea>
            </div>

            <div class="form-group">
                <label for="color">Choose a color of your dragon</label>
                <select name="color" id="">

                    <?php foreach ($colors as $value => $name) : ?>
                        <option value="<?= $value ?>" <?= $color == $value ? 'selected' : '' ?>><?= $name ?></option>
                    <?php endforeach; ?>

                </select>
            </div>

            <div class="form-group">
                <label for="gender">Do you want a boy or a girl?</label>
                <input type="radio" name="gender" value="boy" <?= $gender == 'boy' ? 'checked' : '' ?>>I want a boy<br>
                <input type="radio" name="gender" value="girl" <?= $gender == 'girl' ? 'checked' : '' ?>>I want a girl<br>
                <input type="radio" name="gender" value="none" <?= $gender == 'none' ? 'checked' : '' ?>>Don't care<br>
            </div>

            <div class="form-group">
                <input type="hidden" name="express" value="0">
                <input type="checkbox" name="express" value="1" id="express" <?= $user_wants_express ? 'checked' : '' ?>>
                <label for="express">Do you want express delivery?</label>
            </div>


            <div class="form-group">
                <input type="submit" value="Submit" class="form-control btn btn-primary">
            </div>

        </form>

    
</body>
</html>