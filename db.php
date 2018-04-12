<?php 

$host = 'localhost';

$username = 'root';

$password = '';

$db_name = "taaranganaweb";
$db_connect = mysqli_connect($host, $username, $password, $db_name);

return $db_connect;
?>