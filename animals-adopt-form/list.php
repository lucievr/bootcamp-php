<?php

require 'lib/DBBlackbox.php';

$data = select();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of stored data</title>

    <style>
body {
    font-family: Arial;
}
.item {
    background: #efefef;
    border: 1px solid silver;
    padding: 1em;
    margin-bottom: 1em;
}
    </style>
</head>
<body>

    <h1>Stored data</h1>

    <p>
        If you want to start over, just delete the file <kbd>my_data.json</kbd>. It contains all the stored data.
    </p>

    <?php foreach ($data as $item) : ?>

        <div class="item"><?php var_dump($item); ?></div>

    <?php endforeach; ?>
    
</body>
</html>