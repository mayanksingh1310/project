<?php
$string = " Mayank <img src='text.jpeg'> Is From Bhopal .";
$result =  htmlentities($string);
echo addslashes($result);
?>
