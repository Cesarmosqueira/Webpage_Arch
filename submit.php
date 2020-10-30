<?php 
header("Content-Type: text/plain");
echo "Hello dear {$_POST["username_input"]}!";
echo '<script language="javascript">';
echo 'alert(message successfully sent)';  //not showing an alert box.
echo '</script>';
?>