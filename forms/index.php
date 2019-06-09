<?php
var_dump($_GET);
var_dump($_POST);
function get_value_from_request($name_of_input, $default_value = null)
{
    return isset($_POST[$name_of_input]) ? $_POST[$name_of_input] : $default_value;
}
$author =   get_value_from_request('author', '');
$age =      isset($_POST['age']) ? $_POST['age'] : '';
$bio =      isset($_POST['bio']) ? $_POST['bio'] : '';
$is_robot = isset($_POST['is_robot']) ? $_POST['is_robot'] : '1';
$gender =   isset($_POST['gender']) ? $_POST['gender'] : '1';
$user_is_tired = isset($_POST['tired']) && $_POST['tired'] == 1;
$tired =    isset($_POST['tired']) ? $_POST['tired'] : '1';
$response = isset($_POST['response']) ? $_POST['response'] : '';
var_dump($user_is_tired);
$genders = [
    'm' => 'male',
    'f' => 'female',
    'd' => 'dragon',
    'x' => 'unknown'
];
function esc($text)
{
    return htmlspecialchars($text);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forms</title>

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

    <div style="display: none">
        <h2>Testing form</h2>
        <form action="" method="post">

            <input type="text" name="author" value="J. K. Rowling">
            <br>
            <input type="password" name="pass">
            <br>
            <textarea name="text" id="" cols="30" rows="10"></textarea>
            <br>
            <input type="submit" value="Submit!">
        
        </form>
    </div>

    <?php if (isset($_POST['author'])) : ?>

        <h1>Hello, <?= esc($_POST['author']) ?></h1>

    <?php endif; ?>

    <main>
        <h2>Form fields</h2>
        <form action="" method="post">

            <div class="form-group">
                <label for="">Name</label><br>
                <input 
                    type="text" 
                    name="author" 
                    value="<?= htmlspecialchars($author) ?>" 
                    class="form-control">
            </div>

            <div class="form-group">
                <label for="">Age</label><br>
                <input 
                    type="number" 
                    name="age" 
                    value="<?= htmlspecialchars($age) ?>" 
                    class="form-control">
            </div>

            <div class="form-group">
                <label for="">Biography</label><br>
                <textarea name="bio" id="" cols="30" rows="10"><?= htmlspecialchars($bio) ?></textarea>
            </div>

            <div class="form-group">
                <button onclick="document.getElementById('is_robot_input').value = 0; return false;">I am not a robot</button>
                <input type="hidden" name="is_robot" id="is_robot_input" value="<?= htmlspecialchars($is_robot) ?>">
            </div>

            <div class="form-group">
                <select name="gender" id="">

                    <?php foreach ($genders as $value => $name) : ?>
                        <option value="<?= $value ?>" <?= $gender == $value ? 'selected' : '' ?>><?= $name ?></option>
                    <?php endforeach; ?>

                </select>
            </div>

            <div class="form-group">
                <input type="hidden" name="tired" value="0">
                <input type="checkbox" name="tired" value="1" id="tired" <?= $user_is_tired ? 'checked' : '' ?>>
                <label for="tired">Are you tired yet?</label>
            </div>

            <div class="form-group">
                <input type="radio" name="response" value="email" <?= $response == 'email' ? 'checked' : '' ?>>Respond by email<br>
                <input type="radio" name="response" value="phone" <?= $response == 'phone' ? 'checked' : '' ?>>Respond by phone<br>
                <input type="radio" name="response" value="none" <?= $response == 'none' ? 'checked' : '' ?>>Don't respond<br>
            </div>

            <div class="form-group">
                <input type="submit" value="Submit" class="form-control btn btn-primary">
            </div>

        </form>

    </main>
    
</body>
</html>