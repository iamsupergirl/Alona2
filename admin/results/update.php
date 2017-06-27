<?php
$username = 'root';
$password = '';

$mysql = new mysqli('localhost', $username, $password, 'php_course');
$mysql
    ->query("UPDATE results SET mark='Updated Mark' WHERE mark='Tests Mark'");

?>