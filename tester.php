<?php
error_reporting (E_ALL & ~E_ALL);
$ip_add = $_SERVER['REMOTE_ADDR'];
$ip_block = array('127.0.0.1','127.0.0.2');

foreach($ip_block as $ipadd){
echo $ipadd.'<br>';
}
?>