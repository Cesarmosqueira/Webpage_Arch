<?php 
header("Content-Type: text/plain");
echo "Hello dear {$_POST["username_input"]}!\n";
echo '<script> ';
echo 'alert("message successfully sent")';  //not showing an alert box.
echo '</script>';
?>
