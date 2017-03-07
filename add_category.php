<?php
$name = filter_input(INPUT_POST, 'name');

if ($name == null) {
    $error = "Invalid category data. Check all fields and try again.";
    include('error.php');
} else {
    require_once('database.php');

   
    $query = 'INSERT INTO categories_guitar1 (categoryName) values (:category_name)';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_name', $name);
    $statement->execute();
    $statement->closeCursor();

    include('category_list.php');
}
?>
