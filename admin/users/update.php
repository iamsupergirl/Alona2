<?php
$username = 'root';
$password = '';

$mysql = new mysqli('localhost', $username, $password, 'php_course');
$mysql
    ->query("UPDATE users SET FIO='Updated FIO' WHERE FIO='Test FIO'");

?>