<!-- index.php -->

<?php
$page_title = 'Shopping list';
$page = 'home';

if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

$items = [];

// was the form sent?
if (!empty($_POST['items'])) { // if array item with key 'items' 
                               // exists in $_POST and is not empty
    var_dump($_POST);
    
    $items = $_POST['items'];
    $items = array_filter($items); // array_filter removes all 'empty' items ('', 0, false, null, [])
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1><?= $page_title ?></h1>

    <nav>
        <a href="?page=home">Home</a>
        <a href="?page=form">Form</a>
    </nav>
    
    <?php if ($page == 'home') : ?>

        <?php include 'home.php'; ?>
        
    <?php endif; ?>

    <?php if ($page == 'form') : ?>

        <?php include 'form.php'; ?>

    <?php endif; ?>
    
</body>
</html>


<!-- form.php -->

<form action="" method="post">

    <?php foreach ($items as $i => $text) : ?>

        <input type="text" name="items[<?= $i ?>]" value="<?= htmlspecialchars($text) ?>"><br>

    <?php endforeach; ?>

    <input type="text" name="items[<?= count($items) ?>]" value=""><br>

    <input type="submit" value="Add">
</form>