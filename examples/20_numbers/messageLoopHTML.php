<!DOCTYPE html>
<title>Message Loop</title>

<?php
$msg = $_GET['msg'];
$count = $_GET['count'];

for ($i=0; $i < $count; $i++) {
    echo "<p>This is line {$i}: {$msg}</p>";
}
?>
