<!DOCTYPE html>
<title>Message Loop</title>

<?php
$msg = $_GET['msg'];
$count = $_GET['count'];
$mod = $_GET['mod'];

for ($i=0; $i < $count; $i++) {
    if ($i % $mod == 0) {
        echo "<p>This is line {$i}: {$msg}</p>";
    }
}
?>
