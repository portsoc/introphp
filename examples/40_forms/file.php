<!DOCTYPE html>
<title>Form Example</title>

<?php

$file = 'visitors.txt';

if (isset($_POST['name'])) {
    $name = $_POST['name'];

    $current = "$name\n" . file_get_contents($file);
    file_put_contents($file, $current);

} else {
    $name = "Stranger";
}
?>

<h1>Hello <?php echo $name; ?>!</h1>

<form action="" method="post">
    What is your name?
    <input type="text" name="name" maxlength="50">
    <input type="submit" value="Change">
</form>
