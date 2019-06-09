<?php
require 'DBBlackbox.php'; // "database" operations library
// 1. errors that we want to display to the user
$errors = [];
// 2. determine whether this is creating a new name
// or editing an existing one
if (!empty($_GET['id'])) { // 3. if this is edit
                           // == if there is an identifier of the edited
                           //    record in the URL
    $array = find($_GET['id']); // 6. find record in database
    $name = $array['name']; // just to get around the limitation of DBBlackbox which handles only arrays
} else { // 4. otherwise it is creating a new record
    $name = null; // 5. prepare empty data
}
// 7. now we have $name !!
if ($_POST) { // 8. if the form was submitted
    // 9. update data from request
    // $name = $_POST['name']; // principle
    $name = isset($_POST['name']) ? $_POST['name'] : $name; // better, checks existence in request
    // 10. validation
    $valid = true; // 11. first we assume that everything is fine
    if ($name == '') { // 11a. name is empty
        $errors[] = 'Please fill-in the name'; // inform the user
        $valid = false; // we indicate that something is wrong
    }
    if (strlen($name) < 3) { // 11b. name is empty
        $errors[] = 'The name must be at least 3 characters long'; // inform the user
        $valid = false; // we indicate that something is wrong
    }
    // 12. if the data is valid
    if ($valid) {
        // 13. save the data
        if (!empty($_GET['id'])) { // same logic as above
            update($_GET['id'], ['name' => $name]); // update existing data
            $id = $_GET['id']; // prepare $id from request
        } else {
            $id = insert(['name' => $name]); // insert new data, get the identifier
        }
        // now I have $id !!
        // 14. inform the user
        // done simply by adding success=1 to the redirect URL
        // 15. redirect to a page with GET
        header('Location: form.php?success=1&id='.$id);
    }
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

    <?php if (!empty($_GET['success'])) : ?>
        <div class="success">Successfully saved!</div>
    <?php endif; ?>

    <!-- display any errors to the user -->
    <?php var_dump($errors) ?>

    <form action="" method="post">
    
        <label for="">Name*</label><br>
        <input type="text" name="name" value="<?= htmlspecialchars($name) ?>">
        <br>

        <input type="submit" value="Save">

    </form>
    
</body>
</html>