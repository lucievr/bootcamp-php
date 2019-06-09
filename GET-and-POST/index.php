<?php
var_dump($_GET);
var_dump($_POST);
var_dump($_SERVER);
$parts = parse_url('http://www.cbp-exercises.test:80/day24-forms/request.php?name=Peter');
var_dump($parts);
$query_string = http_build_query([
    'day' => 'Thursday',
    'month' => 'May',
    'date' => 30,
    'favourite tag' => '<h1> with some code</h1>'
]);
var_dump($query_string);
$users = [
    'Peter',
    'Stevo',
    'Kevin',
    'Stuart',
    'Obi Wan Kenobi'
];
parse_str('title_type=feature&num_votes=25000,&genres=adventure&sort=user_rating,desc&start=51&ref_=adv_nxt', $data);
var_dump($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Request demostration</title>
</head>
<body>
    <h1>Request demonstration</h1>

    <h1>Hello, <?= isset($_GET['name']) ? $_GET['name'] : 'unknown user' ?></h1>

    <nav>
        <?php foreach ($users as $username) : ?>
            <a href="?<?= http_build_query(['name' => $username]) ?>"><?= $username ?></a>
        <?php endforeach; ?>
    </nav>
</body>
</html>

<?php
if (!empty($_POST['name'])) {
    // 'name' WAS submitted
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My amazing page</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav>
    <a href="?<?= http_build_query(['page' => '']) ?>">Homepage</a>
    <a href="?<?= http_build_query(['page' => 'form']) ?>">Form</a>
</nav>

    <?php if(isset($_GET['page']) && $_GET['page']=='form') : ?>
    
        <?php include('forms.php'); ?>

    <?php else : ?>

        <?php include('homepage.php'); ?>

    <?php endif; ?>
    
</body>
</html>